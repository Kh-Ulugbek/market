@extends('layouts.master')

@section('styles')
 
      
@endsection

@section('content')
 
                      <!-- Page Header -->
                      <div class="block justify-between page-header md:flex">
                          <div>
                              <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold"> Range Area Charts</h3>
                          </div>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                              <li class="text-[0.813rem] ps-[0.5rem]">
                                <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                  Apex Charts
                                  <i class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                                </a>
                              </li>
                              <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 " aria-current="page">
                                  Range Area Charts
                              </li>
                          </ol>
                      </div>
                      <!-- Page Header Close -->

                      <!-- Start::row-1 -->
                      <div class="grid grid-cols-12 gap-x-6">
                          <div class="xl:col-span-6 col-span-12">
                              <div class="box custom-box">
                                  <div class="box-header">
                                      <div class="box-title">
                                          Basic Range Area Chart
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div id="rangearea-basic"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="xl:col-span-6 col-span-12">
                              <div class="box custom-box">
                                  <div class="box-header">
                                      <div class="box-title">
                                          Combo Range Area Chart
                                      </div>
                                  </div>
                                  <div class="box-body">
                                      <div id="rangearea-combo"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--End::row-1 -->

@endsection

@section('scripts')   

        <!-- Apex Charts JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Internal Apex Range Area Charts JS -->
        @vite('resources/assets/js/apexcharts-rangearea.js')

   
@endsection