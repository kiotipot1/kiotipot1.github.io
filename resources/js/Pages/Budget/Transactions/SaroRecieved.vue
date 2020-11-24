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
          data-target="#Saro"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="Saro"
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
                <form @submit.prevent="addSaro()" id="saro_recieve_form">
                  <div class="form-group">
                    <label for="date">Date </label>
                    <input
                      type="date"
                      class="form-control"
                      v-model="saro_recieved.date_issued"
                      name="date"
                      aria-describedby="helpId"
                      placeholder="date"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="saro_no">Saro No.</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="saro_recieved.saro_no"
                      name="saro_no"
                      aria-describedby="helpId"
                      placeholder="Saro No"
                      required
                    />
                  </div>

                  <div class="form-group">
                    <label for="enable_disable"> Fund Sources</label>
                    <select
                      class="form-control"
                      name="enable_disable"
                      id="enable_disable"
                      v-model="saro_recieved.fund_source_code"
                    >
                      <option selected disabled>Fund Sources</option>
                      <option
                        :value="fs.id"
                        v-for="fs in fund_sources"
                        :key="fs.id"
                      >
                        {{ fs.fund_source_code }}
                      </option>
                    </select>
                  </div>









<div class="form-group">
                    <label for="mfo_code"> MFO</label>
                    <select
                      class="form-control"
                      name="mfo_code"
                      id="mfo_code"
                      v-model="saro_recieved.mfo_code"
                    >
                      <option selected disabled>Fund Sources</option>
                      <option
                        :value="mfo.id"
                        v-for="mfo in mfo_codes"
                        :key="mfo.id"
                      >
                        {{ mfo.mfo_shortname }}
                      </option>
                    </select>
                  </div>
















                  <div class="form-group">
                    <label for="particulars">Particulars</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="saro_recieved.particulars"
                      name="particulars"
                      aria-describedby="helpId"
                      placeholder="particulars"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="object_code">Object Code</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="saro_recieved.object_code"
                      name="object_code"
                      aria-describedby="helpId"
                      placeholder="object_code"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="saro_recieved.amount"
                      name="amount"
                      aria-describedby="helpId"
                      placeholder="amount"
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
      <h4 class="ml-auto">Records SARO Recieved</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">DATE</th>
            <th scope="col">SARO NO.</th>
            <th scope="col">Funding Source</th>
            <th scope="col">Funding Source Code</th>
            <th scope="col">MFO/PAP Code</th>
            <th scope="col">Particulars</th>
            <th scope="col">Object Code</th>
            <th scope="col">Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="saro in saro_recieveds" :key="saro.id">
            <td>{{ saro.date_issued }}</td>
            <td>{{ saro.saro_no }}</td>
            <td>{{ saro.fund_source_description }}</td>
            <td>{{ saro.fund_source_code }}</td>
            <td>{{ saro.mfo_code }}</td>
            <td>{{ saro.particulars }}</td>
            <td>{{ saro.object_code }}</td>
            <td>{{ saro.amount }}</td>
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
      mfo_codes:[],
      fund_sources: [],
      saro_recieveds: [],
      saro_recieved: {
        date_issued: "",
        saro_no: "",
        fund_source_code: "",
        mfo_code: "",
        particulars: "",
        object_code: "",
        amount: "",
      },
    };
  },
  methods: {
    async addSaro() {
      try {
        const res = await axios.post("/api/saro-recieve", this.saro_recieved);
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("saro_recieve_form").reset();
          $("#Saro").modal("hide");
          Fire.$emit("addedsaro");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async getSaro() {
      const res = await axios
        .get("/api/saro-recieve")
        .then((res) => {
          this.saro_recieveds = res.data;
          console.log(this.saro);
        })
        .catch((err) => {
          console.log(err);
        });
    },
    async getFundSource() {
      const res = await axios
        .get("/api/fund-source")
        .then((res) => {
          this.fund_sources = res.data;
          console.log(this.fund_sources);
        })
        .catch((err) => {
          console.log(err);
        });
    },
        async getMfoCode() {
      const res = await axios
        .get("/api/project-code")
        .then((res) => {
          this.mfo_codes = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },

  created() {
    this.getSaro();
    this.getFundSource();
    this.getMfoCode();

    Fire.$on("addedsaro", () => {
      this.getSaro();
    });
  },
};
</script>
