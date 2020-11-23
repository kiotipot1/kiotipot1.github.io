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
          data-target="#FCCCodes"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="FCCCodes"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">New Cluster Code</h5>
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
                <form @submit.prevent="addFCCCode()" id="FCCCodes_form">
                  <div class="form-group">
                    <label for="FCCCodes.id"
                      >Fund Category and Classification Code
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="FCCCode.fund_category_id"
                      name="FCCCodes.id"
                      aria-describedby="helpId"
                      placeholder="Fund_cluster_code"
                    />
                  </div>
                  <div class="form-group">
                    <label for="description"
                      >Classification / Description</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="FCCCode.description"
                      name="FCCCode.description"
                      aria-describedby="helpId"
                      placeholder="description"
                    />
                  </div>
                  <div class="form-group">
                    <label for="FCCCode"
                      >Fund Category and Classification Code</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      v-model="FCCCode.fund_category_code"
                      name="FCCCode"
                      aria-describedby="helpId"
                      placeholder="FCCCode"
                    />
                  </div>
                  <div class="form-group">
                    <label for="FCCCode.nsac">Existing NSACS Fund Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="FCCCode.nsac"
                      name="FCCCode.nsac"
                      aria-describedby="helpId"
                      placeholder="FCCCode.nsac"
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
      <h4 class="ml-auto">Fund Category and Classification Codes</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">Fund Category ID</th>
            <th scope="col">Classification / Description</th>
            <th scope="col">Fund Category and Classification Code</th>
            <th scope="col">Existing NSACS fund Codes</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="fccc in FCCCodes" :key="fccc.id">
            <td>{{ fccc.fund_category_id }}</td>
            <td>{{ fccc.description }}</td>
            <td>{{ fccc.fund_category_code }}</td>
            <td>{{ fccc.nsac }}</td>
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
      FCCCodes: [],
      FCCCode: {
        fund_category_id: 0,
        description: "",
        fund_category_code: "",
        nsacs: "",
        
      },
    };
  },
  methods: {
    async addFCCCode() {
      try {
        const res = await axios.post(
          "/api/fund-category-cluster-code",
          this.FCCCode
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("FCCCodes_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedFCCCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getFCCCodes() {
      const res = await axios
        .get("/api/fund-category-cluster-code")
        .then((res) => {
          this.FCCCodes = res.data;
          console.log(this.FCCCodes);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getFCCCodes(),
      Fire.$on("addedFCCCode", () => {
        this.getFCCCodes();
      });
  },
};
</script>
