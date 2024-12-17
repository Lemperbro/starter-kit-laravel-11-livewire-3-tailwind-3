<h1 class="mb-1 text-gray-600">Menus</h1>
<x-navigations.side-link href="{{ route('dashboard') }}" :icon="'ti ti-home'" :active="request()->routeIs('dashboard')">Dashboard
</x-navigations.side-link>
<x-navigations.side-link href="{{ route('table') }}" :icon="'ti ti-table'" :active="request()->routeIs('table')" >Table
</x-navigations.side-link>

<x-navigations.side-link-dropdown :title="'Form'" :icon="'ti ti-forms'" :use_icon="true">
    <x-navigations.side-sub-link :icon="'ti ti-user-square-rounded'" :withIcon="false">Normal Form</x-navigations.side-sub-link>
    <x-navigations.side-sub-link :icon="'ti ti-user-square-rounded'" :withIcon="false">Form Wizard</x-navigations.side-sub-link>
    </x-admin.side-link-dropdown>

    <h1 class="mt-4 mb-1 text-gray-600">Settings</h1>
    <x-navigations.side-link :icon="'ti ti-database'">Master Data
    </x-navigations.side-link>
    <x-navigations.side-link :icon="'ti ti-settings'">Setting
    </x-navigations.side-link>