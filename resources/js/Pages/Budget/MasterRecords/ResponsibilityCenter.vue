<template>
  <app-layout>
    <div class="card">
      <div class="card-body">
        <table id="example" class="display" style="width: 100%">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">General Ledger Acount</th>
              <th scope="col">Account Group</th>
              <th scope="col">Current/Noncurrent</th>
              <th scope="col">Major Account Group</th>
              <th scope="col">Sub Major Account Group</th>
              <th scope="col">Enable/Disable</th>
              <th scope="col">Enable/Disable</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="chart in chart_of_accounts" :key="chart.id">
              <td>{{ chart.id }}</td>
              <td>{{ chart.general_ledger_account_name }}</td>
              <td>{{ chart.account_group }}</td>
              <td>{{ chart.current_noncurrent }}</td>
              <td>{{ chart.major_account_name }}</td>
              <td>{{ chart.sub_major_account_name }}</td>
              <td>{{ chart.enable_disable }}</td>
              <td>
                <button class="btn btn-primary">update</button>
                <button class="btn btn-danger">delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";
import datatables from "datatables.net-bs4";
require("datatables.net-buttons/js/dataTables.buttons");

require("datatables.net-buttons/js/buttons.html5");
import print from "datatables.net-buttons/js/buttons.print";
import jszip from "jszip/dist/jszip";
import pdfMake from "pdfmake/build/pdfmake";
import pdfFonts from "pdfmake/build/vfs_fonts";
pdfMake.vfs = pdfFonts.pdfMake.vfs;
window.JSZip = jszip;
export default {
  components: {
    AppLayout,
    Welcome,
  },
  data() {
    return {
      chart_of_accounts: [],
      chart_of_account: {
        general_ledger_account: "",
        account_group: "",
        current_noncurrent: "",
        major_account_group: "",
        sub_major_account_group: "",
        enable_disable: "",
      },
    };
  },

  mounted() {
    this.getChartOfAccounts();
  },

  methods: {
    table() {
      this.$nextTick(() => {
        $("#example").DataTable({
            
          order: [[0, "desc"]],
          dom: "Bfrtip",
          buttons: [
            //"copy", "excel", "pdf"
            {
              extend: "copyHtml5",
              text: "copy",
              tittleAttr: "copy",
              className: "btn btn-secondary",
            },
            {
              extend: "excelHtml5",
              text: "<i class='fas fa-file-excel'></i> Excel",
              tittleAttr: "copy",
              className: "btn btn-danger",
            },
            {
              extend: "csvHtml5",
              text: "<i class='fas fa-file-csv'></i> CSV",
              tittleAttr: "CSV",
              className: "btn btn-primary",
            },
            {
              extend: "print",
              text: "<i class='fas fa-file-csv'></i> print",
              tittleAttr: "print",
              className: "btn btn-primary",
            },
          ],
        });
      });
    },
    async getChartOfAccounts() {
      const res = await axios
        .get("/api/chart-of-account")
        .then((res) => {
          this.chart_of_accounts = res.data;

          this.table();
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>
