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
                <form
                  @submit.prevent="addProjectCodes()"
                  id="project_code_form"
                >
                  
                 
                    <div class="form-group">
                    <label for="description">MFO/PAP Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="project_code.mfo_code"
                      name="MFO/PAP Shortname"
                      aria-describedby="helpId"
                      placeholder="MFO/PAP Code"
                    />
                  </div>

                  
                   <div class="form-group">
                    <label for="description">MFO/PAP Shortname</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="project_code.mfo_shortname"
                      name="MFO/PAP Shortname"
                      aria-describedby="helpId"
                      placeholder="MFO/PAP Shortname"
                    />
                  </div>

                  <div class="form-group">
                    <label for="description">MFO/PAP description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="project_code.mfo_description"
                      name="MFO/PAP Shortname"
                      aria-describedby="helpId"
                      placeholder="MFO/PAP description"
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
      <h4 class="ml-auto">MFO/PAP Codes</h4>
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
            <td>{{ pc.mfo_code }}</td>
            <td>{{ pc.mfo_shortname }}</td>
            <td>{{ pc.mfo_description }}</td>
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
       
        mfo_code: "",
        mfo_shortname: "",
        mfo_description: "",
      },
    };
  },
  methods: {
    async addProjectCodes() {
      try {
        const res = await axios.post("/api/project-code", this.project_code);
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("project_code_form").reset();
          $("#ProjectCodes").modal("hide");
          Fire.$emit("addedProjectCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getProjectCode() {
      const res = await axios
        .get("/api/project-code")
        .then((res) => {
          this.project_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getProjectCode(),
      Fire.$on("addedProjectCode", () => {
        this.getProjectCode();
      });
  },
};
</script>

