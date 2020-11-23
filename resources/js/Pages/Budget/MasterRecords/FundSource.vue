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
          data-target="#ProjectCodes"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="ProjectCodes"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" >
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
                  @submit.prevent="addProjectCodes()"
                  id="AuthorizationCode_form"
                >
                  <div class="form-group">
                    <label for="ProjectCodes">Fund Category and Classification Code </label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="project_code.mfo_pap_code"
                      name="AuthorizationCode"
                      aria-describedby="helpId"
                      placeholder="Authorization Code"
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">MFO/PAP Shortname</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="project_code.mfo_pap_shortname"
                      name="MFO/PAP Shortname"
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
                    <button class="btn btn-primary" type="button">Save</button>
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
            <th scope="col">MFO/PAP ID</th>
            <th scope="col">MFO/PAP code</th>
            <th scope="col">MFO/PAP shortname</th>
            <th scope="col">MFO/PAP</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="pc in project_codes" :key="pc.id">
            <td>{{ pc.id }}</td>
            <td>{{ pc.mfo_pap_code }}</td>
            <td>{{ pc.mfo_pap_shortname }}</td>
            <td>{{ pc.mfo_pap }}</td>
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
      project_codes: [],
      project_code: {

        mfo_pap_code:0,
        mfo_pap_shortname: "",
        mfo_pap:""
      },
    };
  },
  // methods: {
  //   async addProjectCode() {
  //     try {
  //       const res = await axios.post(
  //         "api/project-codes,
  //         this.project_code
  //       );
  //       console.log(res);
  //       if (res.status === 201) {
  //         Toast.fire({
  //           icon: "success",
  //           title: res.data,
  //         });
  //         document.getElementById("project_code_form").reset;
  //         $("#ChartOfAccount").modal("hide");
  //         Fire.$emit("addedProjectCode");
  //       }
  //     } catch (e) {
  //       Toast.fire({
  //         icon: "error",
  //         title: e,
  //       });
  //     }
  //   },

  //   async getProjectCode() {
  //     const res = await axios
  //       .get("/api/project-codes")
  //       .then((res) => {
  //         this.project-code = res.data;
  //       })
  //       .catch((err) => {
  //         console.log(err);
  //       });
  //   },
  // },
  // created() {
  //   this.getProjectCode(),

  //     Fire.$on("addProjectCode", () => {
  //       this.getProjectCode();
  //     });
  // },
};
</script>
