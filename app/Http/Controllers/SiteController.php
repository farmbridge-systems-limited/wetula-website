<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function getHomepage(){
        return view('home');
    }

    public function getAboutPage()
    {
        return view('about');
    }

    public function getSectorPage(){
        return view('sector');
    }

    public function getProductPage()
    {
        return view('product');
    }

    public function getContactPage()
    {
        return view('contact');
    }

    public function getFarmersSegmentPage()
    {
        return view('customer-segments.farmers');
    }

    public function getInputSuppliersSegmentPage(){
        return view('customer-segments.input-supplier');
    }

    public function getFinancialServicesSegmentPage(){
        return view('customer-segments.financial-services');
    }

    public function getInsuranceCompaniesSegmentPage(){
        return view('customer-segments.insurance-companies');
    }

    public function getCropMarketingSegmentPage(){
        return view('customer-segments.crop-marketing');
    }

    public function getAppsSoftwareSegmentPage(){
        return view('customer-segments.apps');
    }

    public function getAggregatorsSegmentPage(){
        return view('customer-segments.aggregators');
    }

    public function getEquipmentSuppliersSegmentPage(){
        return view('customer-segments.equipment-suppliers');
    }

    public  function  getRetailersSegmentPage(){
        return view('customer-segments.retailers');
    }

    public function getNgosSegmentPage(){
        return view('customer-segments.ngos');
    }

    public function getCarreersPage()
    {
        return view('carreers');
    }

    public function getPartnersPage(){
        return view('partners');
    }

    public function getJobDetailPage(){
        return view('job-detail');
    }

    public function getTermsofServicePage()
    {
        return view('legal.terms-of-service');
    }

    public function getPrivacyPolicyPage(){
        return view('legal.privacy-policy');
    }

    public function getDataProtectionPage(){
        return view('legal.data-protection');
    }

    public function getCorporateAssurancePage(){
        return view('legal.corporate-assurance');
    }
}
