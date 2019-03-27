<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@getHomepage');
Route::get('/about', 'SiteController@getAboutPage');
Route::get('/sector', 'SiteController@getSectorPage');
Route::get('/product', 'SiteController@getProductPage');
Route::get('/contact-us', 'SiteController@getContactPage');
Route::get('/join-us', 'SiteController@getCarreersPage');
Route::get('/job-detail', 'SiteController@getJobDetailPage');
Route::get('/partners', 'SiteController@getPartnersPage');

Route::get('/legal/terms-of-service', 'SiteController@getTermsofServicePage');
Route::get('/legal/privacy-policy', 'SiteController@getPrivacyPolicyPage');
Route::get('/legal/disclaimer', 'SiteController@getTermsofServicePage');
Route::get('/legal/data-protection-policy', 'SiteController@getTermsofServicePage');
Route::get('/legal/corporate-assurance', 'SiteController@getTermsofServicePage');

Route::get('/customers/farmers', 'SiteController@getFarmersSegmentPage');
Route::get('/customers/input-suppliers', 'SiteController@getInputSuppliersSegmentPage');
Route::get('/customers/financial-services', 'SiteController@getFinancialServicesSegmentPage');
Route::get('/customers/insurance-companies', 'SiteController@getInsuranceCompaniesSegmentPage');
Route::get('/customers/crop-marketing', 'SiteController@getCropMarketingSegmentPage');
Route::get('/customers/apps-and-software', 'SiteController@getAppsSoftwareSegmentPage');
Route::get('/customers/aggregators', 'SiteController@getAggregatorsSegmentPage');
Route::get('/customers/equipment-suppliers', 'SiteController@getEquipmentSuppliersSegmentPage');
Route::get('/customers/retailers', 'SiteController@getRetailersSegmentPage');
Route::get('/customers/ngos', 'SiteController@getNgosSegmentPage');


