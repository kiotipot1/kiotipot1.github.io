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
          data-target="#FundSource"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="FundSource"
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
                  @submit.prevent="addFundSource()"
                  id="fund_source_form"
                >
             
                  <div class="form-group">
                    <label for="fund_source">Fund Source</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="fund_source.fund_source"
                      name="fund_source"
                      aria-describedby="helpId"
                      placeholder="fund_source"
                      required
                    />
                  </div>
                     <div class="form-group">
                    <label for="description">Description</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="fund_source.fund_source_description"
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
      <h4 class="ml-auto">Fund Source</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">Fund Source ID</th>
            <th scope="col">Fund Source</th>
            <th scope="col">Description</th>
            
          </tr>
        </thead>
        <tbody>
          <tr v-for="fs in fund_sources" :key="fs.id">
            
            <td>{{ fs.id }}</td>
            <td>{{ fs.fund_source_code }}</td>
            <td>{{ fs.fund_source_description }}</td>
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
      fund_sources: [],
      fund_source: {

      
        fund_source: "",
        fund_source_description:""
      },
    };
  },
  methods: {
    async addFundSource() {
      console.log(this.fund_source);
      try {
        const res = await axios.post(
          "/api/fund-source",
          this.fund_source
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("fund_source_form").reset();
          $("#FundSource").modal("hide");
          Fire.$emit("addedFundSource");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getFundSource() {
      const res = await axios
        .get("/api/fund-source")
        .then((res) => {
          this.fund_sources = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getFundSource(),

      Fire.$on("addedFundSource", () => {
        this.getFundSource();
      });
  },
};
</script>
