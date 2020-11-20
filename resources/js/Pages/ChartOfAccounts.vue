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
                <form @submit.prevent="addSubMajorAccountGroup">
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
                    />
                  </div>
                  <button class="btn btn-primary d-flex ml-auto" type="submit">
                    Save
                  </button>
                </form>
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
                <form @submit.prevent="addGeneralLedgerAccount">
                  <div class="form-group">
                    <label for="GeneralLedgerAccount"></label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="
                        general_ledger_account.general_ledger_account_name
                      "
                      name="GeneralLedgerAccount"
                      aria-describedby="helpId"
                      placeholder="GeneralLedgerAccount"
                    />
                  </div>
                  <button class="btn btn-primary d-flex ml-auto" type="submit">
                    Save
                  </button>
                </form>
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
                <form @submit.prevent="addMajorAccountGroup()">
                  <div class="form-group">
                    <label for="MajorAccountGroup"></label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="major_account_group.major_account_group_name"
                      name="MajorAccountGroup"
                      aria-describedby="helpId"
                      placeholder="MajorAccountGroup"
                    />
                  </div>
                  <button class="btn btn-primary d-flex ml-auto" type="submit">
                    Save
                  </button>
                </form>
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
                <form @submit.prevent="addChartOfAccounts">
                  <div class="form-group">
                    <label for="GeneralLedgerAccount"></label>
                    <select
                      class="form-control"
                      name="GeneralLedgerAccount"
                      id="GeneralLedgerAccount"
                    >
                      <option selected disable>General Ledger Account</option>
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="AccountGroup"></label>
                    <select
                      class="form-control"
                      name="AccountGroup"
                      id="AccountGroup"
                    >
                      <option selected disable>Account Group</option>
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="Current_noncurrent"></label>
                    <select
                      class="form-control"
                      name="Current_noncurrent"
                      id="Current_noncurrent"
                    >
                      <option selected disable>Current/Noncurrent</option>
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="MajorAccountGroup"></label>
                    <select
                      class="form-control"
                      name="MajorAccountGroup"
                      id="MajorAccountGroup"
                    >
                      <option selected disable>Major Account Group</option>
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="SubMajorAccountGroup"></label>
                    <select
                      class="form-control"
                      name="SubMajorAccountGroup"
                      id="SubMajorAccountGroup"
                    >
                      <option selected disable>Sub Major Account Group</option>
                      <option value=""></option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </template>
    <!-- Table -->
    <div class="px-6">
      <table class="table table-striped overflow-auto">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">General Ledger Acount</th>
            <th scope="col">Account Group</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
             <td>Otto</td>
            <td>@mdo</td>
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
      chart_of_accounts: [],
      chart_of_account: {
        general_ledger_account: 0,
        account_group: "",
        current_noncurrent: "",
        major_account_group: 0,
        sub_major_account_group: 0,
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
      const res = await axios.post(
        "/api/chartofaccounts",
        this.chart_of_account
      );
      if (res.status === 201) {
        Toast.fire({
          icon: "success",
          title: res.data,
        });
      }
    },
    async addGeneralLedgerAccount() {
      const res = await axios.post(
        "/api/generalledgeraccount",
        this.general_ledger_account
      );
      if (res.status === 201) {
        Toast.fire({
          icon: "success",
          title: res.data,
        });
      }
    },
    async addMajorAccountGroup() {
      const res = await axios.post(
        "/api/majoraccountgroup",
        this.major_account_group
      );
      if (res.status === 201) {
        Toast.fire({
          icon: "success",
          title: res.data,
        });
      }
    },
    async addSubMajorAccountGroup() {
      const res = await axios.post(
        "/api/submajoraccountgroup",
        this.sub_major_account_group
      );
      if (res.status === 201) {
        Toast.fire({
          icon: "success",
          title: res.data,
        });
      }
    },
  },
};
</script>
