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
          data-target="#ProgramCOde"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="ProgramCOde"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id>
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
                  @submit.prevent="addProgramCode()"
                  id="program_code_form"
                >
                  <div class="form-group">
                    <label for="program_code_id">program_code_id ID</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="program_code.program_code_id"
                      name="program_code_id"
                      placeholder="program_code_id"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="program_title">program_title</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="program_code.program_title"
                      name="program_title"
                      aria-describedby="helpId"
                      placeholder="program_title "
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="program_code"
                      >program_code
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="program_code.program_code"
                      name="program_code"
                      aria-describedby="helpId"
                      placeholder="program_code"
                      required
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
      <h4 class="ml-auto">program code</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">program_code</th>
            <th scope="col">program_title</th>
            <th scope="col">program_code</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="pc in program_codes" :key="pc.id">
            <td>{{ pc.program_code }}</td>
            <td>{{ pc.program_title }}</td>
            <td>{{ pc.program_code }}</td>
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
      program_codes: [],
      program_code: {
        program_code_id:"",
        program_title:"",
        program_code: "",
      },
    };
  },
  methods: {
    async addProgramCode() {
      console.log(this.program_code)
      try {
        const res = await axios.post(
          "/api/program-code",
          this.program_code
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("program_code_form").reset();
          $("#ProgramCOde").modal("hide");
          Fire.$emit("addedProgramCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e.message,
        });
      }
    },

    async getProgramCode() {
      const res = await axios
        .get("/api/program-code")
        .then((res) => {
          this.program_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getProgramCode(),
      Fire.$on("addedProgramCode", () => {
        this.getProgramCode();
      });
  },
};
</script>
