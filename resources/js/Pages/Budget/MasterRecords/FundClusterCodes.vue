<template>
  <app-layout>
    <template #header>
      <div
        style="
          .btn {
            padding-left: 20px;
          }
        "
      >
        <button
          type="button"
          class="btn btn-info"
          data-toggle="modal"
          data-target="#FundClusterCode"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="FundClusterCode"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id="remittance_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  New Cluster Code
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form
                  @submit.prevent="addFundClusterCode()"
                  id="fund_cluster_code_form"
                >
                 <div class="form-group">
                    <label for="description">Fund Cluster Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="fund_cluster_code.fund_cluster_code_id"
                      name="description"
                      aria-describedby="helpId"
                      placeholder="fundClusterCode"
                    />
                  </div>
                  
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="fund_cluster_code.description"
                      name="description"
                      aria-describedby="helpId"
                      placeholder="description"
                    />
                  </div>

                  <div class="flex">
                    <button
                      type="button"
                      class="btn btn-secondary ml-auto mr-1"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- ADD MajorAccountGroup MODAL-->
      </div>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">Fund Cluster Code</th>
            <th scope="col">description</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cluster_code in fund_cluster_codes" :key="cluster_code.id">
            <td>{{ cluster_code.id }}</td>
            <td>{{ cluster_code.description }}</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"></div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    AppLayout,
    Welcome,
  },
  data() {
    return {
      fund_cluster_codes: [],
      fund_cluster_code: {
        fund_cluster_code_id:0,
        description: "",
      },
    };
  },
  methods: {
    async addFundClusterCode() {
      console.log(this.fund_cluster_code)
      try {
        const res = await axios.post(
          "/api/fund-cluster-code",
          this.fund_cluster_code
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("fund_cluster_code_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedFundClusterCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getFundClusterCode() {
      const res = await axios
        .get("/api/fund-cluster-code")
        .then((res) => {
          this.fund_cluster_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getFundClusterCode(),

      Fire.$on("addedFundClusterCode", () => {
        this.getFundClusterCode();
      });
  },
};
</script>
