@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->

< div class = "content d-flex flex-column flex-column-fluid" id = "kt_content" >

<!--begin::Entry-->

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title justify-content-between ">
                    <h3 class="card-label">Assigned Course
                        <span class="d-block text-muted pt-2 font-size-sm">This semeseter all course shown here</span>
                    </h3>
                </div>
                <div class="card-title justify-content-between ">
                    <h3 class="card-label">Course Duration
                        <span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span>
                    </h3>
                </div>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
                <!--begin: Datatable-->
                <!-- began::notes -->
                <section id="content">
                    <section class="hbox stretch">
                        <!-- .aside -->
                        <aside class="aside-xl b-l b-r" id="note-list">
                            <section class="vbox flex">
                                <header class="header clearfix">
                                    <span class="pull-right m-t">
                                        <button
                                            class="btn btn-dark btn-sm btn-icon"
                                            id="new-note"
                                            data-toggle="tooltip"
                                            data-placement="right"
                                            title=""
                                            data-original-title="New">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                    <p class="h3">Notebook</p>
                                    <div class="input-group m-t-sm m-b-sm">
                                        <span class="input-group-addon input-sm">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control input-sm"
                                            id="search-note"
                                            placeholder="search"></div>
                                    </header>
                                    <section>
                                        <section>
                                            <section>
                                                <div class="padder">
                                                    <!-- note list -->
                                                    <ul id="note-items" class="list-group list-group-sp">
                                                        <li class="list-group-item hover active">
                                                            <div class="view" id="note-1">
                                                                <button class="destroy close hover-action">×</button>
                                                                <div class="note-name">
                                                                    <strong>
                                                                        New note
                                                                    </strong>
                                                                </div>
                                                                <div class="note-desc">
                                                                    empty note
                                                                </div>
                                                                <span class="text-xs text-muted">Aug 7th, 9:19 pm</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <!-- templates -->
                                                    <script type="text/template" id="item-template">
                                                        <div class="view" id="note-<%- id %>">
                                                            <button class="destroy close hover-action">&times;</button>
                                                            <div class="note-name">
                                                                <strong>
                                                                    <%- (name && name.length) ? name : 'New note' %>
                                                                    </strong>
                                                                </div>
                                                                <div class="note-desc">
                                                                    <%- description.replace(name,'').length ? description.replace(name,'') : 'empty note' %>
                                                                    </div>
                                                                    <span class="text-xs text-muted">
                                                                        <%- moment(parseInt(date)).format('MMM Do, h:mm a') %>
                                                                        </span>
                                                                    </div>
                                                                </script>
                                                                <!-- / template -->
                                                                <!-- note list -->
                                                                <p class="text-center">&nbsp;</p>
                                                            </div>
                                                        </section>
                                                    </section>
                                                </section>
                                            </section>
                                        </aside>
                                        <!-- /.aside -->
                                        <aside id="note-detail">
                                            <section class="vbox">
                                                <header class="header bg-light lter bg-gradient b-b">
                                                    <p id="note-date">Created on Aug 7th, 9:19 pm</p>
                                                </header>
                                                <section class="bg-light lter">
                                                    <section class="hbox stretch">
                                                        <aside>
                                                            <section class="vbox b-b">
                                                                <section class="paper">
                                                                    <grammarly-extension
                                                                        style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                                                        class="_1KJtL"></grammarly-extension>
                                                                    <textarea
                                                                        type="text"
                                                                        class="form-control scrollable"
                                                                        placeholder="Type your note here"
                                                                        spellcheck="false"></textarea>
                                                                </section>
                                                            </section>
                                                        </aside>
                                                    </section>
                                                </section>
                                            </section>
                                        </aside>
                                    </section>
                                    <a
                                        href="#"
                                        class="hide nav-off-screen-block"
                                        data-toggle="class:nav-off-screen, open"
                                        data-target="#nav,html"></a>
                                </section>
                                <!-- end::notes -->
                                <!--end: Datatable-->

                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->

                @endsection