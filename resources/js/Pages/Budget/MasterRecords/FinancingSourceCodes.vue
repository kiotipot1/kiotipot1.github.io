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
          data-target="#FinancingSourceCodes"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>
        

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="FinancingSourceCodes"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id="financing_source_code_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  New Finance
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
                <form @submit.prevent="addFinancingSourceCode()" id="fincancing_source_code_form">
                <div class="form-group">
                    <label for="financing_source_code">Finance Source Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="financing_source_code.financing_source_code"
                      name="financing_source_code"
                      aria-describedby="helpId"
                      placeholder="Payee ID"
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="financing_source_code.description"
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
      <h4 class="ml-auto">FinancingSourceCodes</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">Financing Source Codes</th>
            <th scope="col">description</th>
    
          </tr>
        </thead>
        <tbody>
          <tr v-for="finance in financing_source_codes" :key="finance.id">
            <td>{{ finance.finance_source_code }}</td>
            <td>{{ finance.description }}</td>
           
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
      financing_source_codes: [],
      financing_source_code: {
        financing_source_code:0,
        description: "",
    
      
      },
    };
  },
  methods: {
    async addFinancingSourceCode() {
      try {
        const res = await axios.post(
          "/api/finance-source-code",
          this.financing_source_code
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("financing_source_code_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedFinancingSourceCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getFinancingSourceCode() {
      const res = await axios
        .get("/api/finance-source-code")
        .then((res) => {
          this.financing_source_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getFinancingSourceCode(),

      Fire.$on("addedFinancingSourceCode", () => {
        this.getFinancingSourceCode();
      });
  },
};
</script>
