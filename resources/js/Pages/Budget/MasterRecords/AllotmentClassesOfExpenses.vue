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
                  @submit.prevent="addAllotmentClass()"
                  id="allotment_class_form"
                >
                  <div class="form-group">
                    <label for="allotement_class">Allotment Class ID</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="allotment_class.allotment_id"
                      name="allotement_class"
                      placeholder="Allotment Class ID"
                    />
                  </div>
                  <div class="form-group">
                    <label for="uacs">UACS Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="allotment_class.uacs_code"
                      name="uacs"
                      aria-describedby="helpId"
                      placeholder="UACS Code"
                    />
                  </div>
                  <div class="form-group">
                    <label for="allotment_class"
                      >allotment_class
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="allotment_class.allotment_class"
                      name="allotment_class"
                      aria-describedby="helpId"
                      placeholder="allotment_class"
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
      <h4 class="ml-auto">Allotment Class</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">allotment_id</th>
            <th scope="col">uacs_code</th>
            <th scope="col">allotment_class</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="ac in allotment_classes" :key="ac.id">
            <td>{{ ac.allotment_id }}</td>
            <td>{{ ac.uacs_code }}</td>
            <td>{{ ac.allotment_class }}</td>
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
      allotment_classes: [],
      allotment_class: {
        allotment_id:"",
        uacs_code: "",
        allotment_class: "",
      },
    };
  },
  methods: {
    async addAllotmentClass() {
      console.log(this.allotment_class)
      try {
        const res = await axios.post(
          "/api/allotment-class",
          this.allotment_class
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("allotment_class_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedAllotmentClass");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getAllotmentClass() {
      const res = await axios
        .get("/api/allotment-class")
        .then((res) => {
          this.allotment_classes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getAllotmentClass(),
      Fire.$on("addedAllotmentClass", () => {
        this.getAllotmentClass();
      });
  },
};
</script>
