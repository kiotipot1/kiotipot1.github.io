<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-gray-500 border-b border-gray-100">
      <!-- Primary Navigation Menu -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
              <inertia-link :href="route('dashboard')">
                <jet-application-mark class="block h-9 w-auto" />
              </inertia-link>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <jet-nav-link
                :href="route('dashboard')"
                :active="route().current('dashboard')"
                class="text-white text-decoration-none"
              >
                Dashboard
              </jet-nav-link>

              <!--dropdown Acounting-->
              <div
                class="dropdown text-white text-decoration-none flex align-items-center"
              >
                <button
                  class="btn dropdown-toggle text-white text-decoration-none min-h-full focus:outline-white"
                  type="button"
                  id="dropdownMenu1"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Accounting
                </button>
                <ul
                  class="dropdown-menu multi-level text-decoration-none"
                  role="menu"
                  aria-labelledby="dropdownMenu"
                >
                  <!-- <li class="dropdown-item"><a href="#">Some action</a></li>
                  <li class="dropdown-item">
                    <a href="#">Some other action</a>
                  </li>-->
                  <li class="dropdown-divider"></li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" tabindex="-1" href="#"
                      >Master Records</a
                    >
                    <ul class="dropdown-menu">
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">another level</a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                            </ul>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                        </ul>
                      </li> -->
                      <li>
                        <jet-dropdown-link
                          :href="route('chartofaccounts')"
                          :active="route().current('chartofaccounts')"
                          class="text-white text-decoration-none"
                        >
                          ChartOfAccount
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('remittances')"
                          :active="route().current('remittances')"
                          class="text-decoration-none"
                        >
                          Remittances
                        </jet-dropdown-link>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>

              <!-- BudGet DROPDOWN-->

              <div class="dropdown flex align-items-center">
                <button
                  class="btn dropdown-toggle text-white text-decoration-none text-decoration-none min-h-full"
                  type="button"
                  id="dropdownMenu1"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Budget
                </button>
                <ul
                  class="dropdown-menu multi-level"
                  role="menu"
                  aria-labelledby="dropdownMenu"
                >
                  <!-- <li class="dropdown-item"><a href="#">Some action</a></li>
                  <li class="dropdown-item">
                    <a href="#">Some other action</a>
                  </li>-->
                  <li class="dropdown-divider"></li>
                  <!--Master Records Dropdown-->
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" tabindex="-1" href="#"
                      >Master Records</a
                    >
                    <ul class="dropdown-menu">
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">another level</a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                            </ul>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                        </ul>
                      </li> -->
                   
                      <li>
                        <jet-dropdown-link
                          :href="route('responsibility-centers')"
                          :active="route().current('responsibility-centers')"
                          class="text-decoration-none"
                        >
                          Responsibility Center
                        </jet-dropdown-link>
                      </li>

                      <li>
                        <jet-dropdown-link
                          :href="route('fund-cluster-codes')"
                          :active="route().current('fund-cluster-codes')"
                          class="text-decoration-none"
                        >
                          Fund Cluster Codes
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('financing-source-codes')"
                          :active="route().current('financing-source-codes')"
                          class="text-decoration-none"
                        >
                          Finance Source Codes
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('authorization-codes')"
                          :active="route().current('authorization-codes')"
                          class="text-decoration-none"
                        >
                          Authorization Codes
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('fund-category&classification-codes')"
                          :active="
                            route().current(
                              'fund-category&classification-codes'
                            )
                          "
                          class="text-decoration-none"
                        >
                          Fund Category and Classification Codes
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('project-codes')"
                          :active="route().current('project-codes')"
                          class="text-decoration-none"
                        >
                          MFO/PAP Codes(Project Codes)
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('allotment-classes-of-expenses')"
                          :active="
                            route().current('allotment-classes-of-expenses')
                          "
                          class="text-decoration-none"
                        >
                          Allotment Classes of Expenses
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('program-codes')"
                          :active="route().current('chartofaccounts')"
                          class="text-decoration-none"
                        >
                          Program Codes
                        </jet-dropdown-link>
                      </li>
                      <li>
                        <jet-dropdown-link
                          :href="route('fund-source')"
                          :active="route().current('fund-source')"
                          class="text-decoration-none"
                        >
                          Fund Source
                        </jet-dropdown-link>
                      </li>
                    </ul>
                  </li>

                  <!-- 2nd dropdown-->
                  <li class="dropdown-submenu">
                    <a class="dropdown-item" tabindex="-1" href="#"
                      >Transactions</a
                    >
                    <ul class="dropdown-menu text-decoration-none">
                      
                      <!-- <li class="dropdown-submenu">
                        <a class="dropdown-item" href="#">Even More..</a>
                        <ul class="dropdown-menu">
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                          <li class="dropdown-submenu">
                            <a class="dropdown-item" href="#">another level</a>
                            <ul class="dropdown-menu">
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                              <li class="dropdown-item">
                                <a href="#">4th level</a>
                              </li>
                            </ul>
                          </li>
                          <li class="dropdown-item">
                            <a href="#">3rd level</a>
                          </li>
                        </ul>
                      </li> -->
                    

                      <li>
                        <jet-dropdown-link
                          :href="route('saro-recieved')"
                          :active="route().current('saro-recieved')"
                          class="text-decoration-none"
                        >
                          Records SARO Recieved
                        </jet-dropdown-link>
                      </li>
                      
                    </ul>
                  </li>
                </ul>
              </div>

              <!--master records dropdown-->

              <!--<div
                class="btn-group border-opacity-0"
                id="MasterRecords"
                style="border: none"
              >
                <button
                  type="button"
                  class="btn dropdown-toggle text-white focus:border-transparent p-0 border-transparent border-opacity-0"
                  style="border: none"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Budget Master Records
                </button>
                <div
                  class="dropdown-menu flex flex-column justify-items-auto p-0 mt-24 h-auto w-48"
                >
                  <ul class="flex flex-column justify-items-auto">
                    <li>
                      <jet-dropdown-link
                        :href="route('responsibility-centers')"
                        :active="route().current('responsibility-centers')"
                        class="text-decoration-none"
                      >
                        Responsibility Center
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('fund-cluster-codes')"
                        :active="route().current('fund-cluster-codes')"
                        class="text-decoration-none"
                      >
                        Fund Cluster Codes
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('financing-source-codes')"
                        :active="route().current('financing-source-codes')"
                        class="text-decoration-none"
                      >
                        Finance Source Codes
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('authorization-codes')"
                        :active="route().current('authorization-codes')"
                        class="text-decoration-none"
                      >
                        Authorization Codes
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('fund-category&classification-codes')"
                        :active="
                          route().current('fund-category&classification-codes')
                        "
                        class="text-decoration-none"
                      >
                        Fund Category and Classification Codes
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('project-codes')"
                        :active="route().current('project-codes')"
                        class="text-decoration-none"
                      >
                        MFO/PAP Codes(Project Codes)
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('allotment-classes-of-expenses')"
                        :active="
                          route().current('allotment-classes-of-expenses')
                        "
                        class="text-decoration-none"
                      >
                        Allotment Classes of Expenses
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('program-codes')"
                        :active="route().current('chartofaccounts')"
                        class="text-decoration-none"
                      >
                        Program Codes
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('fund-source')"
                        :active="route().current('fund-source')"
                        class="text-decoration-none"
                      >
                        Fund Source
                      </jet-dropdown-link>
                    </li>
                  </ul>
                </div>
              </div>-->

              <!--Accounting Master Records DropDown-->
              <!-- <div class="btn-group" id="MasterRecords">
                <button
                  type="button"
                  class="btn dropdown-toggle text-white"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Accounting Master Records
                </button>
                <div
                  class="dropdown-menu flex flex-column justify-items-auto p-0 mt-24 h-auto w-48"
                >
                  <ul class="flex flex-column justify-items-auto">
                    <li>
                      <jet-dropdown-link
                        :href="route('chartofaccounts')"
                        :active="route().current('chartofaccounts')"
                        class="text-white text-decoration-none"
                      >
                        ChartOfAccount
                      </jet-dropdown-link>
                    </li>
                    <li>
                      <jet-dropdown-link
                        :href="route('remittances')"
                        :active="route().current('remittances')"
                        class="text-decoration-none"
                      >
                        Remittances
                      </jet-dropdown-link>
                    </li>
                  </ul>
                </div>
              </div>-->

              <!--dropdown-->
            </div>
          </div>

          <!-- Settings Dropdown -->
          <div class="hidden sm:flex sm:items-center sm:ml-6">
            <div class="ml-3 relative">
              <jet-dropdown align="right" width="48">
                <template #trigger>
                  <button
                    v-if="$page.jetstream.managesProfilePhotos"
                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"
                  >
                    <img
                      class="h-8 w-8 rounded-full object-cover"
                      :src="$page.user.profile_photo_url"
                      :alt="$page.user.name"
                    />
                  </button>

                  <button
                    v-else
                    class="flex items-center text-sm font-medium text-gray-500 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out"
                  >
                    <div>{{ $page.user.name }}</div>

                    <div class="ml-1">
                      <svg
                        class="fill-current h-4 w-4"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"
                        />
                      </svg>
                    </div>
                  </button>
                </template>

                <template #content>
                  <!-- Account Management -->
                  <div class="block px-4 py-2 text-xs text-gray-400">
                    Manage Account
                  </div>

                  <jet-dropdown-link :href="route('profile.show')">
                    Profile
                  </jet-dropdown-link>

                  <jet-dropdown-link
                    :href="route('api-tokens.index')"
                    v-if="$page.jetstream.hasApiFeatures"
                  >
                    API Tokens
                  </jet-dropdown-link>

                  <div class="border-t border-gray-100"></div>

                  <!-- Team Management -->
                  <template v-if="$page.jetstream.hasTeamFeatures">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                      Manage Team
                    </div>

                    <!-- Team Settings -->
                    <jet-dropdown-link
                      :href="route('teams.show', $page.user.current_team)"
                    >
                      Team Settings
                    </jet-dropdown-link>

                    <jet-dropdown-link
                      :href="route('teams.create')"
                      v-if="$page.jetstream.canCreateTeams"
                    >
                      Create New Team
                    </jet-dropdown-link>

                    <div class="border-t border-gray-100"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                      Switch Teams
                    </div>

                    <template v-for="team in $page.user.all_teams">
                      <form @submit.prevent="switchToTeam(team)" :key="team.id">
                        <jet-dropdown-link as="button">
                          <div class="flex items-center">
                            <svg
                              v-if="team.id == $page.user.current_team_id"
                              class="mr-2 h-5 w-5 text-green-400"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              stroke="currentColor"
                              viewBox="0 0 24 24"
                            >
                              <path
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                              ></path>
                            </svg>
                            <div>{{ team.name }}</div>
                          </div>
                        </jet-dropdown-link>
                      </form>
                    </template>

                    <div class="border-t border-gray-100"></div>
                  </template>

                  <!-- Authentication -->
                  <form @submit.prevent="logout">
                    <jet-dropdown-link as="button"> Logout </jet-dropdown-link>
                  </form>
                </template>
              </jet-dropdown>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
            <button
              @click="showingNavigationDropdown = !showingNavigationDropdown"
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            >
              <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  :class="{
                    hidden: showingNavigationDropdown,
                    'inline-flex': !showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                  :class="{
                    hidden: !showingNavigationDropdown,
                    'inline-flex': showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Responsive Navigation Menu -->
      <div
        :class="{
          block: showingNavigationDropdown,
          hidden: !showingNavigationDropdown,
        }"
        class="sm:hidden"
      >
        <div class="pt-2 pb-3 space-y-1">
          <jet-responsive-nav-link
            :href="route('dashboard')"
            :active="route().current('dashboard')"
          >
            Dashboard
          </jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
          <div class="flex items-center px-4">
            <div class="flex-shrink-0">
              <img
                class="h-10 w-10 rounded-full"
                :src="$page.user.profile_photo_url"
                :alt="$page.user.name"
              />
            </div>

            <div class="ml-3">
              <div class="font-medium text-base text-gray-800">
                {{ $page.user.name }}
              </div>
              <div class="font-medium text-sm text-gray-500">
                {{ $page.user.email }}
              </div>
            </div>
          </div>

          <div class="mt-3 space-y-1">
            <jet-responsive-nav-link
              :href="route('profile.show')"
              :active="route().current('profile.show')"
            >
              Profile
            </jet-responsive-nav-link>

            <jet-responsive-nav-link
              :href="route('api-tokens.index')"
              :active="route().current('api-tokens.index')"
              v-if="$page.jetstream.hasApiFeatures"
            >
              API Tokens
            </jet-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" @submit.prevent="logout">
              <jet-responsive-nav-link as="button">
                Logout
              </jet-responsive-nav-link>
            </form>

            <!-- Team Management -->
            <template v-if="$page.jetstream.hasTeamFeatures">
              <div class="border-t border-gray-200"></div>

              <div class="block px-4 py-2 text-xs text-gray-400">
                Manage Team
              </div>

              <!-- Team Settings -->
              <jet-responsive-nav-link
                :href="route('teams.show', $page.user.current_team)"
                :active="route().current('teams.show')"
              >
                Team Settings
              </jet-responsive-nav-link>

              <jet-responsive-nav-link
                :href="route('teams.create')"
                :active="route().current('teams.create')"
              >
                Create New Team
              </jet-responsive-nav-link>

              <div class="border-t border-gray-200"></div>

              <!-- Team Switcher -->
              <div class="block px-4 py-2 text-xs text-gray-400">
                Switch Teams
              </div>

              <template v-for="team in $page.user.all_teams">
                <form @submit.prevent="switchToTeam(team)" :key="team.id">
                  <jet-responsive-nav-link as="button">
                    <div class="flex items-center">
                      <svg
                        v-if="team.id == $page.user.current_team_id"
                        class="mr-2 h-5 w-5 text-green-400"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                      >
                        <path
                          d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <div>{{ team.name }}</div>
                    </div>
                  </jet-responsive-nav-link>
                </form>
              </template>
            </template>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Heading -->
    <header class="bg-white shadow-sm">
      <div
        class="max-w-auto py-6 px-4 sm:px-6 lg:px-8 flex align-items-center h-8"
      >
        <slot name="header"> </slot>
      </div>
    </header>

    <!-- Page Content -->
    <main>
      <slot></slot>
    </main>
    <footer>
      <slot name="footer"></slot>
    </footer>

    <!-- Modal Portal -->
    <portal-target name="modal" multiple> </portal-target>
  </div>
</template>

<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink";

export default {
  components: {
    JetApplicationMark,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    JetResponsiveNavLink,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    };
  },

  methods: {
    switchToTeam(team) {
      this.$inertia.put(
        route("current-team.update"),
        {
          team_id: team.id,
        },
        {
          preserveState: false,
        }
      );
    },

    logout() {
      axios.post(route("logout").url()).then((response) => {
        window.location = "/";
      });
    },
  },
};

// $(document).ready(function () {
//   $(".dropdown-submenu a.test").on("click", function (e) {
//     $(this).next("ul").toggle();

//     e.stopPropagation();
//     e.preventDefault();
//   });
// });
</script>

<style>
.dropdown-submenu {
  position: relative;
  text-decoration: none;
}

.dropdown-submenu > .dropdown-menu {
  top: 0;
  width: 200px;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
  text-decoration: none;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
  text-decoration: none;
}

.dropdown-submenu > a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
  text-decoration: none;
}

.dropdown-submenu:hover > a:after {
  border-left-color: #fff;
  text-decoration: none;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
  text-decoration: none;
}
</style>
