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
          data-target="#Remittances"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="Remittances"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id="remittance_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  New Remittance
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
                <form @submit.prevent="addRemittance()" id="remittance_form">
                  <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="remittance.description"
                      name="description"
                      aria-describedby="helpId"
                      placeholder="description"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="payee_id">Payee ID</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="remittance.payee_id"
                      name="payee_id"
                      aria-describedby="helpId"
                      placeholder="Payee ID"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="payee_name"> Payee Name</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="remittance.payee_name"
                      name="payee_name"
                      aria-describedby="helpId"
                      placeholder="Payee Name"
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
      <h4 class="ml-1/2">Remittance</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">description</th>
            <th scope="col">payee_id</th>
            <th scope="col">payee_name</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="remit in remittances" :key="remit.id">
            <td>{{ remit.id }}</td>
            <td>{{ remit.description }}</td>
            <td>{{ remit.payee_id }}</td>
            <td>{{ remit.payee_name }}</td>
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
      remittances: [],
      remittance: {
        description: "",
        payee_id: "",
        payee_name: "",
      },
    };
  },
  methods: {
    async addRemittance() {
      try {
        const res = await axios.post(
          "/api/remittance",
          this.remittance
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("remittance_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedRemittance");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getRemittance() {
      const res = await axios
        .get("/api/remittance")
        .then((res) => {
          this.remittances = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getRemittance(),

      Fire.$on("addedRemittance", () => {
        this.getRemittance();
      });
  },
};
</script>
