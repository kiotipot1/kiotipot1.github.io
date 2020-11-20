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
                      v-model="sub_major_account_group.sub_major_account_group_name"
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
                      v-model="general_ledger_account.general_ledger_account_name"
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
    <body class="antialiased font-sans bg-gray-200">
      <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
          <div>
            <h2 class="text-2xl font-semibold leading-tight">Users</h2>
          </div>
          <div class="my-2 flex sm:flex-row flex-col">
            <div class="flex flex-row mb-1 sm:mb-0">
              <div class="relative">
                <select
                  class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                >
                  <option>5</option>
                  <option>10</option>
                  <option>20</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>
              <div class="relative">
                <select
                  class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500"
                >
                  <option>All</option>
                  <option>Active</option>
                  <option>Inactive</option>
                </select>
                <div
                  class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
                >
                  <svg
                    class="fill-current h-4 w-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
            <div class="block relative">
              <span
                class="h-full absolute inset-y-0 left-0 flex items-center pl-2"
              >
                <svg
                  viewBox="0 0 24 24"
                  class="h-4 w-4 fill-current text-gray-500"
                >
                  <path
                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"
                  ></path>
                </svg>
              </span>
              <input
                placeholder="Search"
                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none"
              />
            </div>
          </div>
          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div
              class="inline-block min-w-full shadow rounded-lg overflow-hidden"
            >
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      ID
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      General Ledger Account
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      Account Group
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      Current/NonCurrent
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      Major Account Group
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                    >
                      Sub Major Account group
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10"></div>
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            Vera Carpenter
                          </p>
                        </div>
                      </div>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <p class="text-gray-900 whitespace-no-wrap">
                        Jan 21, 2020
                      </p>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">Activo</span>
                      </span>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">Activo</span>
                      </span>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">Activo</span>
                      </span>
                    </td>
                    <td
                      class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                    >
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-green-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">Activo</span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div
                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between"
              >
                <span class="text-xs xs:text-sm text-gray-900">
                  Showing 1 to 4 of 50 Entries
                </span>
                <div class="inline-flex mt-2 xs:mt-0">
                  <button
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l"
                  >
                    Prev
                  </button>
                  <button
                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r"
                  >
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

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
        general_ledger_account:0,
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
