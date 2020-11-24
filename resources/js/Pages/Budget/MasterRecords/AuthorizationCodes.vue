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
          data-target="#AuthorizationCode"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="AuthorizationCode"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id>
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
                  @submit.prevent="addAuthorizationCode()"
                  id="authorization_code_form"
                >
                  <div class="form-group">
                    <label for="AuthorizationCode">Fund Category and Classification Code </label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="authorization_code.authorization_code"
                      name="AuthorizationCode"
                      aria-describedby="helpId"
                      placeholder="Authorization Code"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="authorization_code.description"
                      name="description"
                      aria-describedby="helpId"
                      placeholder="description"
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
      <h4 class="ml-auto">
      Authorization Code
      </h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">Authorization Codes Code</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="ac in authorization_codes" :key="ac.id">
            <td>{{ ac.authorization_code }}</td>
            <td>{{ ac.description }}</td>
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
      authorization_codes: [],
      authorization_code: {
        authorization_code:0,
        description: "",
      },
    };
  },
  methods: {
    async addAuthorizationCode() {
      try {
        const res = await axios.post(
          "/api/authorization-code",
          this.authorization_code
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("authorization_code_form").reset();
          $("#AuthorizationCode").modal("hide");
          Fire.$emit("addedAuthorizationCode");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getAuthorizationCode() {
      const res = await axios
        .get("/api/authorization-code")
        .then((res) => {
          this.authorization_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getAuthorizationCode(),

      Fire.$on("addedAuthorizationCode", () => {
        this.getAuthorizationCode();
      });
  },
};
</script>
