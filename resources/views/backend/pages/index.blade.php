@extends('backend.layouts.main')
@section('content')
    <div class="pagetitle">
        <div class="row">
            <div class="col-lg-6">
                <h1>Table</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Table</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary flt-r btn-orange move-left"><i class="bx bxs-plus-square"></i>
                    Create</button>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-top">
                                <div class="datatable-dropdown">
                                    <label>
                                        <select class="datatable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="-1">All</option>
                                        </select> entries per page
                                    </label>
                                </div>
                                <div class="datatable-search">
                                    <input class="datatable-input" placeholder="Search..." type="search"
                                        title="Search within table">
                                </div>
                            </div>
                            <div class="datatable-container">
                                <table class="table datatable datatable-table">
                                    <thead>
                                        <tr>
                                            <th data-sortable="true" style="width: 15.813040585495674%;">
                                                <button class="datatable-sorter">Lorem Ipsum</button>
                                            </th>
                                            <th data-sortable="true" style="width: 20.181636726546905%;">
                                                <button class="datatable-sorter">Lorem Ipsum</button>
                                            </th>
                                            <th data-sortable="true" style="width: 20.542914171656687%;">
                                                <button class="datatable-sorter">Lorem Ipsum</button>
                                            </th>
                                            <th data-format="YYYY/DD/MM" data-sortable="true" data-type="date"
                                                style="width: 16.899534264803727%;">
                                                <button class="datatable-sorter">Action</button>
                                            </th>
                                        </tr>
                                        <tr data-index="9">
                                            <td>Lorem Ipsum</td>
                                            <td>Lorem Ipsum</td>
                                            <td>Lorem Ipsum</td>
                                            <td>
                                                <span class="badge bg-warning"><a href="#"><i
                                                            class="bx bx-glasses"></i> View</a></span>
                                                <span class="badge bg-primary"><a href="#"><i
                                                            class="bx bx-pencil"></i> Edit</a></span>
                                                <span class="badge bg-danger"><a href="#"><i class="bx bx-trash"></i>
                                                        Delete</a></span>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                            <div class="datatable-bottom">
                                <div class="datatable-info">Showing 1 to 10 of 100 entries</div>
                                <nav class="datatable-pagination">
                                    <ul class="datatable-pagination-list">
                                        <li class="datatable-pagination-list-item datatable-hidden datatable-disabled">
                                            <button data-page="1" class="datatable-pagination-list-item-link"
                                                aria-label="Page 1">‹</button>
                                        </li>
                                        <li class="datatable-pagination-list-item datatable-active"><button data-page="1"
                                                class="datatable-pagination-list-item-link" aria-label="Page 1">1</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                class="datatable-pagination-list-item-link" aria-label="Page 2">2</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="3"
                                                class="datatable-pagination-list-item-link" aria-label="Page 3">3</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="4"
                                                class="datatable-pagination-list-item-link" aria-label="Page 4">4</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="5"
                                                class="datatable-pagination-list-item-link" aria-label="Page 5">5</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="6"
                                                class="datatable-pagination-list-item-link" aria-label="Page 6">6</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="7"
                                                class="datatable-pagination-list-item-link" aria-label="Page 7">7</button>
                                        </li>
                                        <li class="datatable-pagination-list-item datatable-ellipsis datatable-disabled">
                                            <button class="datatable-pagination-list-item-link">…</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="10"
                                                class="datatable-pagination-list-item-link" aria-label="Page 10">10</button>
                                        </li>
                                        <li class="datatable-pagination-list-item"><button data-page="2"
                                                class="datatable-pagination-list-item-link" aria-label="Page 2">›</button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
