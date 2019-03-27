<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="metro4:init" content="false">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wetula | Data Protection Policy</title>
    <link rel="favicon" href="{{asset('favicon.png?v2')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
    {{--Header--}}
    <header-component></header-component>

    <div id="terms-of-service" class="content-wrapper">


        <nav class="container">
            <ul id="legal-nav" class="inline-list d-flex flex-justify-center" id="scrolltab">
                <li class=""><a href="{{url('/legal/terms-of-service')}}" class="button" >Terms of Service</a></li>
                <li ><a href="{{url('/legal/privacy-policy')}}" class="button">Privacy Policy</a></li>
                <li><a href="{{url('/legal/disclaimer')}}" class="button">Disclaimer & Waiver of Liability</a></li>
                <li class="active"><a href="{{url('/legal/data-protection-policy')}}" class="button">Data Protection Policy</a></li>
                <li><a href="{{url('/legal/corporate-assurance')}}" class="button">Corporate Assurance</a></li>
            </ul>
        </nav>


        <div id="legal-header" class="drop-shadow bg-green">
            <div class="container pt-10 pb-10">
                <h1 class="mt-4 fg-white text-center">Data Protection Policy</h1>
            </div>
        </div>
        <div class="bg-white pt-12 pb-10">
            <div id="legal-container" class="container">

                <main class="content w-100">
                    <div id="intro">


                        <p class="text-leader2">
                            Wetula collects personal data from people on its platforms through its IT tools and services.  In the Wetula context, "Personal Data" includes a person’s or identifiable person’s names, email addresses, physical addresses, telephone numbers and roles played that are collected and used for Wetula's Purpose (defined below)
                        </p>

                        <p class="text-leader2">
                            Due to the international structure of Wetula, this Personal Data is likely to be used (i.e. in a legal sense “transferred” and “processed”) in and outside the territory of Ghana by the Wetula Central Secretariat (W/CS), Wetula staff, clients and Members, third parties and other individuals located in nearly all countries in the world.
                        </p>
                        <p class="text-leader2">
                            This Wetula Member Data Protection Policy ("Policy") applies to Personal Data regardless of the country in which it is collected or used. It does not apply to the Personal Data that a Wetula staff of client collects and uses outside of Wetula's Purpose.
                        </p>

                        <p class="text-leader2">
                            As a Wetula, staff, client or Member, you are responsible for protecting Personal Data in accordance with this Policy even if you give access to this Personal Data to:

                            <br><br>

                            <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                        <p class="text-leader2">People within your organization (including other Wetula Members or Body of Users, Administrators, Committee Secretaries, IT staff, external IT support agents, etc.);</p>
                    </div>

                    </span>
                    <br>

                    <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">Third Parties (including sub-organizations, agents, subcontractors, etc.) outside your organization.</p>
                                    </div>

                            </span>
                    <br>


                    <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="text-leader2">Others through computer interfaces.</p>
                                    </div>

                            </span>

                    <br>
                    </p>

                    <p class="text-leader">As a Wetula staff, client or member, you must:</p>

                    <div id="toc-normal-flow" class="bg-lightGray d-none drop-shadow mt-10 p-8 rounded">
                        <privacy-policy-nav></privacy-policy-nav>
                    </div>
                    <ol id="legal-content-list" class="mt-10">


                        <li>
                            Ensure that the people whose Personal Data you collect and use*: <br><br>
                            <div class="">
                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">understand that Wetula and its staff, members and clients are bound by a Wetula Policy protecting the personal data of everyone participating on the Wetula platform;</p>
                                    </div>
                                </span>
                                <br>

                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">consent to their Personal Data being collected, used, shared and archived for the purpose of development and industry standardization of and related activities;</p>
                                    </div>
                                </span>
                                <br>

                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">agree that their Personal Data could be transferred to countries with laws that may not guarantee the same level of data protection as in their country or Ghana (where W/CS is based); and</p>
                                    </div>
                                </span>
                                <br>


                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">know that you and the Wetula Data Protection Officer are available to answer any questions about the content and purpose of their Personal Data</p>
                                    </div>
                                </span>
                                <br>


                            </div>

                        </li>

                        <li>
                            Ensure that the people you allow to access Personal Data*: <br><br>
                            <div class="">
                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">agree to use the Personal Data they access only for the purposes of their development or industry standardization and related activities in the world with a view (i) to facilitating national and international exchange of goods and services and (ii) to develop cooperation in the spheres of technological, agricultural and economic activity (Wetula's Purpose);</p>
                                    </div>
                                </span>
                                <br>

                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">agree to respect relevant Wetula rules and any applicable laws; and</p>
                                    </div>
                                </span>
                                <br>

                                <span class="pl-20 pt-10"><span class="fg-orange text-bold"><span class="mif-stop"></span></span>
                                    <div class="ml-20 pl-15 mt-8-minus">
                                       <p class="">understand that they remain bound by these obligations even after their participation on the Wetula platform and in its development work</p>
                                    </div>
                                </span>
                                <br>


                            </div>

                            <p class="pl-4">
                                If they don't agree to the conditions in clause 1 and 2 above you should not enter their Personal Data into the Wetula IT tools (or remove it if already entered).
                            </p>

                        </li>

                        <li>
                            collect, use, share and archive (i.e. “process”) Personal Data solely for the purpose of retrieval for use by the owner, to promote and improve the development of industry and related activities and services in the world with a view (i) to facilitating national and international exchange of goods and services and (ii) to developing cooperation in the spheres of technological, agricultural and economic activity – this means that Personal Data can be collected and used for commercial purposes as the person concerned has also explicitly given permission for this to Wetula or the Wetula Member;
                        </li>

                        <li>
                            undertake appropriate technical and organizational measures to protect Personal Data prior to processing it, including nominating at least one person for W/CS to contact regarding any data protection issues;
                        </li>

                        <li>
                            immediately inform the person to whom the Personal Data relates and W/CS if you cannot comply with this Policy;
                        </li>

                        <li>
                            immediately inform and cooperate with Wetula in case of any accidental or unauthorized access;
                        </li>

                        <li>
                            ensure that Personal Data is kept up-to-date and deleted, as appropriate, in the Wetula Global Directory and any other Wetula IT tool in which staff, clients and Members are required to enter Personal Data;
                        </li>

                        <li>
                            fully and quickly cooperate with Wetula in fulfilling information requests by people whose Personal Data we hold and Wetula undertakes to fully and quickly cooperate with Wetula Members that receive information requests;
                        </li>

                        <li>
                            if you cease to be an Wetula staff, client or Member, destroy any Personal Data and copies thereof to which this Policy applies and certify its destruction to Wetula in writing; and
                        </li>

                        <li>
                            ensure that your employees and any third parties entering or accessing Personal Data on your behalf accept this Policy or equivalent or stricter terms. In all cases, you remain responsible for compliance with this Policy by such third parties.
                        </li>

                        <p class="text-leader2">
                            Wetula may change this Policy without consulting with its clients and Members. However, staff, clients and members will be notified and the changes posted on Wetula online.
                            <br><br>

                            Responsibility for the protection of Personal Data lies with Wetula clients and Members, who are also accountable to one another. Any Wetula client or Member with concerns about the practices of another Wetula Member should contact that Member and inform the Wetula Data Protection Officer at the W/CS.
                            <br> <br>
                            Wetula may require staff, clients and Members to terminate the access of third parties in case of doubt regarding compliance with this Policy. The management of Wetula may also decide to take measures against Wetula staff, clients and Members that do not comply with this Policy.
                            <br>
                            Any data protection and related laws to which Wetula staff, clients and Members are normally subject continue to apply. This Policy adds to, and does not replace, such laws. Where national data protection laws offer equal or stricter protection, they can override this Policy. Members are obliged to report other conflicts between this Policy and laws to which they are subject to W/CS.
                            <br><br>
                            This Policy is governed exclusively by Ghana law with the exclusion of its international private law. The exclusive place of jurisdiction shall be Ghana.
                            <br>
                            Wetula will assist the Member with this by sending an email advising the person of this when their data is first entered in the ISO Global Directory. If a Member wants to opt-out of this service they should contact <a
                                href="mailto:helpdesk@wetula.org">helpdesk@wetula.org</a>.
                        </p>
                    </ol>
                </main>
                <aside class="d-none">
                    <div id="toc-side-flow" class="bg-lightGray  drop-shadow mt-10 p-8 rounded">
                        <privacy-policy-nav></privacy-policy-nav>
                    </div>
                </aside>

            </div>
        </div>

    </div>


    {{--Footer--}}
    @include('components.footer')

</div>

</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
