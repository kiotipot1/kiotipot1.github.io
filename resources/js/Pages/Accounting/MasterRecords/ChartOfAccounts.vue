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
          data-target="#ChartOfAccounts"
          data-whatever="@getbootstrap"
        >
          add in Chart
        </button>
        <button
          type="button"
          class="btn btn-info"
          data-toggle="modal"
          data-target="#GeneralLedgerAccount"
        >
          add GeneralLedgerAccount
        </button>
        <button
          type="button"
          class="btn btn-info"
          data-toggle="modal"
          data-target="#MajorAccountGroup"
        >
          add MajorAccountGroup
        </button>
        <button
          type="button"
          class="btn btn-info"
          data-toggle="modal"
          data-target="#SubMajorAccountGroup"
        >
          add SubMajorAccountGroup
        </button>

        <!-- ADD SubMajorAccountGroup MODAL-->

        <div
          class="modal fade"
          id="SubMajorAccountGroup"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  SubMajorAccountGroup
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
                <div class="form-group">
                  <label for="SubMajorAccountGroup"></label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="
                      sub_major_account_group.sub_major_account_group_name
                    "
                    name="SubMajorAccountGroup"
                    aria-describedby="helpId"
                    placeholder="SubMajorAccountGroup"
                    id="sub_major_account_group_form"
                  />
                </div>
                <button
                  class="btn btn-primary d-flex ml-auto"
                  type="button"
                  @click="addSubMajorAccountGroup"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- ADD GeneralLedgerAccount MODAL-->
        <div
          class="modal fade"
          id="GeneralLedgerAccount"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog" id="general_ledger_accounts_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                <div class="form-group">
                  <label for="GeneralLedgerAccount"></label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="general_ledger_account.general_ledger_account_name"
                    name="GeneralLedgerAccount"
                    aria-describedby="helpId"
                    placeholder="GeneralLedgerAccount"
                    id="general_ledger_accounts_form"
                  />
                </div>
                <button
                  class="btn btn-primary d-flex ml-auto"
                  type="button"
                  @click="addGeneralLedgerAccount"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- ADD MajorAccountGroup MODAL-->
        <div
          class="modal fade"
          id="MajorAccountGroup"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                <div class="form-group">
                  <label for="MajorAccountGroup"></label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="major_account_group.major_account_group_name"
                    name="MajorAccountGroup"
                    aria-describedby="helpId"
                    placeholder="MajorAccountGroup"
                    id="major_account_group_form"
                  />
                </div>
                <button
                  @click="addMajorAccountGroup"
                  class="btn btn-primary d-flex ml-auto"
                  type="button"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- ADD CHART OF ACCOUNTS MODAL-->
        <div
          class="modal fade"
          id="ChartOfAccounts"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  New Chart Of Account
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
                  @submit.prevent="addChartOfAccounts()"
                  id="chart_of_accounts_form"
                >
                  <div class="form-group">
                    <label for="GeneralLedgerAccount"
                      >General Ledger Account</label
                    >
                    <select
                      class="form-control"
                      name="GeneralLedgerAccount"
                      id="GeneralLedgerAccount"
                      v-model="chart_of_account.general_ledger_account"
                    >
                      <option selected disabled>General Ledger Account</option>
                      <option
                        :value="gla.id"
                        v-for="gla in general_ledger_accounts"
                        :key="gla.id"
                      >
                        {{ gla.general_ledger_account_name }}
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="AccountGroup"> Account Group</label>
                    <select
                      class="form-control"
                      name="AccountGroup"
                      id="AccountGroup"
                      v-model="chart_of_account.account_group"
                    >
                      <option selected disabled>Account Group</option>
                      <option value="accsample">accsample</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Current_noncurrent">Current/Noncurrent</label>
                    <select
                      class="form-control"
                      name="Current_noncurrent"
                      id="Current_noncurrent"
                      v-model="chart_of_account.current_noncurrent"
                    >
                      <option selected disabled>Current/Noncurrent</option>
                      <option value="sample">sample</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="MajorAccountGroup">Major Account Group</label>
                    <select
                      class="form-control"
                      name="MajorAccountGroup"
                      id="MajorAccountGroup"
                      v-model="chart_of_account.major_account_group"
                    >
                      <option selected disabled>Major Account Group</option>
                      <option
                        :value="mag.id"
                        v-for="mag in major_account_groups"
                        :key="mag.id"
                      >
                        {{ mag.major_account_name }}
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="SubMajorAccountGroup">
                      Sub Major Account Group</label
                    >
                    <select
                      class="form-control"
                      name="SubMajorAccountGroup"
                      id="SubMajorAccountGroup"
                      v-model="chart_of_account.sub_major_account_group"
                    >
                      <option selected disabled>Sub Major Account Group</option>
                      <option
                        :value="smag.id"
                        v-for="smag in sub_major_account_groups"
                        :key="smag.id"
                      >
                        {{ smag.sub_major_account_name }}
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="enable_disable"> Enable/Disable</label>
                    <select
                      class="form-control"
                      name="enable_disable"
                      id="enable_disable"
                      v-model="chart_of_account.enable_disable"
                    >
                      <option selected disabled>Enable/Disable</option>
                      <option
                        :value="ed"
                        v-for="ed in enable_disable"
                        :key="ed"
                      >
                        {{ ed }}
                      </option>
                    </select>
                  </div>

                  <div class="d-flex">
                    <button
                      type="button"
                      class="btn btn-secondary ml-auto mr-2"
                      data-dismiss="modal"
                    >
                      Close
                    </button>
                    <button class="btn btn-primary d-flex" type="submit">
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4 class="ml-auto">Chart Of Accounts</h4>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">General Ledger Acount</th>
            <th scope="col">Account Group</th>
            <th scope="col">Current/Noncurrent</th>
            <th scope="col">Major Account Group</th>
            <th scope="col">Sub Major Account Group</th>
            <th scope="col">Enable/Disable</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="chart in chart_of_accounts" :key="chart.id">
            <td>{{ chart.id }}</td>
            <td>{{ chart.general_ledger_account_name }}</td>
            <td>{{ chart.account_group }}</td>
            <td>{{ chart.current_noncurrent }}</td>
            <td>{{ chart.major_account_name }}</td>
            <td>{{ chart.sub_major_account_name }}</td>
            <td>{{ chart.enable_disable }}</td>
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
      enable_disable: ["enable", "disable"],
      chart_of_accounts: [],
      chart_of_account: {
        general_ledger_account: "",
        account_group: "",
        current_noncurrent: "",
        major_account_group: "",
        sub_major_account_group: "",
        enable_disable: "",
      },
      general_ledger_accounts: [],
        general_ledger_account: {
          general_ledger_account_name: "",
        },
      major_account_groups: [],
      major_account_group: {
        major_account_group_name: "",
      },
      sub_major_account_groups: [],
      sub_major_account_group: {
        sub_major_account_group_name: "",
      },
    };
  },
  methods: {
    async addChartOfAccounts() {
      try {
        const res = await axios.post(
          "/api/chart-of-account",
          this.chart_of_account
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("chart_of_accounts_form").reset;
          $("#ChartOfAccount").modal("hide");
          Fire.$emit("addedChart");
        }
      } catch (e) {
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async addGeneralLedgerAccount() {
      try {
        const res = await axios.post(
          "/api/general-ledger-account",
          this.general_ledger_account
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          this.general_ledger_account= {
          general_ledger_account_name: "",
        },
          $("#GeneralLedgerAccount").modal("hide");
          Fire.$emit("addedGeneralLedgerAccount");
        }
      } catch (e) {
        console.log(e);
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },
    async addMajorAccountGroup() {
      try {
        const res = await axios.post(
          "/api/major-account-group",
          this.major_account_group
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });
          document.getElementById("major_account_group_form").reset;
          $("#MajorAccountGroup").modal("hide");
          Fire.$emit("addedMajorAccountGroup");
        }
      } catch (e) {
        console.log(e);
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    async addSubMajorAccountGroup() {
      try {
        const res = await axios.post(
          "/api/sub-major-account-group",
          this.sub_major_account_group
        );
        console.log(res);
        if (res.status === 201) {
          Toast.fire({
            icon: "success",
            title: res.data,
          });

          document.getElementById("sub_major_account_group_form").reset;
          $("#SubMajorAccountGroup").modal("hide");
          Fire.$emit("addedSubMajorAccountGroup");
        }
      } catch (e) {
        console.log(e);
        Toast.fire({
          icon: "error",
          title: e,
        });
      }
    },

    //get data functions
    async getChartOfAccounts() {
      const res = await axios
        .get("/api/chart-of-account")
        .then((res) => {
          this.chart_of_accounts = res.data;
          console.log(this.chart_of_accounts);
        })
        .catch((err) => {
          console.log(err);
        });
    },
    async getGeneralLedgerAccount() {
      const res = await axios
        .get("/api/general-ledger-account")
        .then((res) => {
          this.general_ledger_accounts = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    async getMajorAccountGroup() {
      const res = await axios
        .get("/api/major-account-group")
        .then((res) => {
          this.major_account_groups = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    async getSubMajorAccountGroup() {
      const res = await axios
        .get("/api/sub-major-account-group")
        .then((res) => {
          this.sub_major_account_groups = res.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  created() {
    this.getChartOfAccounts(),
      this.getGeneralLedgerAccount(),
      this.getMajorAccountGroup(),
      this.getSubMajorAccountGroup(),
      Fire.$on("addedChart", () => {
        this.getChartOfAccounts();
      });
    Fire.$on("addedGeneralLedgerAccount", () => {
      this.getGeneralLedgerAccount();
    });
    Fire.$on("addedMajorAccountGroup", () => {
      this.getMajorAccountGroup();
    }),
      Fire.$on("addedSubMajorAccountGroup", () => {
        this.getSubMajorAccountGroup();
      });
  },
};
</script>
