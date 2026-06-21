@extends('layouts.admin.app')
@section('content')

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif

<div class="tms-page-content" id="page-purchase">
    <div class="d-flex justify-content-between align-items-center mb-4">
            
            <div class="d-flex align-items-center gap-2">
                <button class="btn btn-outline-secondary btn-sm rounded-circle" onclick="document.querySelector('[data-page=page-dashboard]').click()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <h4 class="fw-bold mb-0 text-dark">Add Account</h4>
            </div>
            <div class="d-flex gap-2">
                  {{-- <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#expenseModal">
    <i class="bi bi-plus"></i>
    Add New Expense
</button> --}}
                {{-- <button class="btn btn-outline-secondary btn-sm bg-white border" onclick="showToast('Sales settings opened!', 'info')">
                    <i class="fas fa-cog me-1"></i> Settings
                </button> --}}

                <a href="{{ route('account.create') }}" class="btn btn-outline-primary btn-sm bg-white border">
                    <i class="fas fa-list me-1"></i> Create account
                </a>
                {{-- <button class="btn btn-outline-primary btn-sm bg-white border" id="toggleSaleListViewBtn">
                    <i class="fas fa-list me-1"></i> Create customer
                </button> --}}
            </div>
        </div>
    {{-- <div class="table-filter mb-2 flex items-center justify-between"><div class="flex flex-wrap items-center"><div class="rizzui-input-root flex flex-col"><label class="block"><span class="rizzui-input-container flex items-center peer w-full transition duration-200 [&amp;.is-focus]:ring-[0.8px] ring-[0.6px] [&amp;.is-hover]:border-primary [&amp;.is-focus]:border-primary [&amp;.is-focus]:ring-primary [&amp;_input::placeholder]:opacity-60 px-3.5 py-2 text-sm rounded-md border border-muted ring-muted bg-transparent h-9" data-focus="false" data-hover="false"><span class="rizzui-input-prefix whitespace-nowrap leading-normal"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="h-4 w-4" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M232.49,215.51,185,168a92.12,92.12,0,1,0-17,17l47.53,47.54a12,12,0,0,0,17-17ZM44,112a68,68,0,1,1,68,68A68.07,68.07,0,0,1,44,112Z"></path></svg></span><input spellcheck="false" placeholder="Search by anything.." class="rizzui-input-field w-full border-0 bg-transparent p-0 focus:outline-none focus:ring-0 [&amp;::-ms-clear]:hidden [&amp;::-ms-reveal]:hidden [&amp;::-webkit-search-cancel-button]:hidden [&amp;::-webkit-inner-spin-button]:m-0 [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:m-0 [&amp;::-webkit-outer-spin-button]:appearance-none [&amp;:placeholder-shown~.input-clear-btn]:opacity-0 [&amp;:placeholder-shown~.input-clear-btn]:invisible [&amp;:not(:placeholder-shown)~.input-clear-btn]:opacity-100 [&amp;:not(:placeholder-shown)~.input-clear-btn]:visible ps-2.5" type="search" value="" style="font-size: inherit;"><span type="button" class="rizzui-input-clear-btn input-clear-btn inline-flex shrink-0 transform items-center justify-center rounded-full bg-muted/70 backdrop-blur text-foreground/90 transition-all duration-200 ease-in-out hover:bg-primary hover:text-primary-foreground h-4 w-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-auto"><path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"></path></svg></span></span></label></div></div><div class="ms-4 flex flex-shrink-0 items-center"><button class="rizzui-button inline-flex font-medium items-center justify-center active:enabled:translate-y-px focus:outline-none focus-visible:ring-[1.8px] focus-visible:ring-offset-2 ring-offset-background transition-colors duration-200 px-4 py-2 text-sm rounded-md bg-transparent border border-muted dark:backdrop-blur focus-visible:ring-muted hover:text-primary hover:border-primary me-2.5 h-9 pe-3 ps-2.5" type="button"><svg stroke="currentColor" fill="currentColor" stroke-width="1.7" viewBox="0 0 256 256" class="me-1.5 h-[18px] w-[18px]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M230.6,49.53A15.81,15.81,0,0,0,216,40H40A16,16,0,0,0,28.19,66.76l.08.09L96,139.17V216a16,16,0,0,0,24.87,13.32l32-21.34A16,16,0,0,0,160,194.66V139.17l67.74-72.32.08-.09A15.8,15.8,0,0,0,230.6,49.53ZM40,56h0Zm108.34,72.28A15.92,15.92,0,0,0,144,139.17v55.49L112,216V139.17a15.92,15.92,0,0,0-4.32-10.94L40,56H216Z"></path></svg>Filters</button><div><button class="rizzui-action-icon-root inline-flex items-center justify-center active:enabled:translate-y-px focus:outline-none focus-visible:ring-[1.8px] focus-visible:ring-offset-2 ring-offset-background transition-colors duration-200 p-1 w-9 h-9 rounded bg-transparent border border-muted dark:backdrop-blur focus-visible:ring-muted hover:text-primary hover:border-primary" type="button" title="Toggle Columns"><svg stroke="currentColor" fill="currentColor" stroke-width="3" viewBox="0 0 256 256" class=" h-6 w-6" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M120,64a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16h72A8,8,0,0,1,120,64Zm-8,32H40a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16ZM144,72h72a8,8,0,0,0,0-16H144a8,8,0,0,0,0,16Zm72,24H144a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Zm0,40H144a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Zm0,40H144a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Z"></path></svg></button></div><div class="rizzui-dropdown-root inline-block relative" data-headlessui-state=""><button class="rizzui-dropdown-button" id="headlessui-menu-button-:r3h:" type="button" aria-haspopup="menu" aria-expanded="false" data-headlessui-state=""><button class="rizzui-button inline-flex font-medium items-center justify-center active:enabled:translate-y-px focus:outline-none focus-visible:ring-[1.8px] focus-visible:ring-offset-2 ring-offset-background transition-colors duration-200 px-2.5 py-1 text-xs h-8 bg-transparent border border-muted dark:backdrop-blur focus-visible:ring-muted hover:text-primary hover:border-primary rounded-sm" type="button"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="h-4 w-4 mr-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M224,152v56a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V152a8,8,0,0,1,16,0v56H208V152a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,132.69V40a8,8,0,0,0-16,0v92.69L93.66,106.34a8,8,0,0,0-11.32,11.32Z"></path></svg>Export<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" class="h-3 w-3 ml-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path></svg></button></button></div></div></div> --}}
    <div class="data-table-wrapper">
        <table id="customer-table" class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th> ID </th>
                <th> Customer </th>
                <th> Cust Code </th>
                <th> Under </th>
                <th> Opening Balance </th>
                <th> Credit Limit </th>
                <th class="action"> Action </th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>
 <script type="text/javascript">
  $(function () {
    var table = $('#customer-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('customer-master') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'customercode', name: 'customercode'},
            {data: 'underGroup', name: 'underGroup'},
            // {data: 'openingbalance', name: 'openingbalance'},

            {
                data: null,
                name: 'openingbalance',
                render: function(data, type, row) {

                    return '₹ ' + row.openingbalance + ' ' + row.openingbalancestatus;

                }
            },

            {data: 'creditlimit', name: 'creditlimit'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>
@endsection