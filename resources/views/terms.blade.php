@extends('layouts.master')

@section('content')

    <header class="termhead text-white text-center">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>Terms</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">

                </div>
            </div>
        </div>
    </header>



    <section class="text-center bg-light pt-4 pb-5">
    <div class="container">
        <div class="faq text-left">

            <div id="accordion">
                <h3 class="mb-4">Definitions</h3>
                <div class="card mb-2">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Real estate
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Property consisting of land or buildings.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            MLS
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Multiple listing service that real estate agents use for all  listings.  Classifications include active, contingent, closed and expired.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Comparables (or comps)
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Properties with characteristics that are similar to a subject property whose value is being sought.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                            Courthouse records
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            A court whose acts and proceedings are kept on permanent record.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                            Mortgage
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Money lent by a bank or other creditor at interest in exchange for taking title of the debtor's property, which is used as collateral.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
                            Pre-approval letter
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Letter from a lender that specifies how much that lender is willing to lend to a prospective home buyer.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
                            Down payment
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseSeven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            An initial payment made when something is bought on credit. Depends on what type of loan borrower is applying for.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">
                            Closing costs
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseEight" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Fees paid at the closing of a real estate transaction. Closing costs are incurred by either the buyer or seller.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">
                            Interest Rate
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseNine" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            The proportion of a loan that is charged as interest to the borrower, typically expressed as an annual percentage of the loan outstanding.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTen">
                            Appraisal
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Property valuation to establish a sale price for a payment.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseEleven">
                            A real estate sale contract
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseEleven" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            A legally binding agreement between two parties concerning the terms of purchase or transfer of real property.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwelve">
                            Earnest money deposit
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwelve" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Money paid to confirm a contract showing good faith and interest in a property.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThirteen">
                            Escrow
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseThirteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            A bond, deed or other document kept in the custody of a third party and taking effect only when a specified condition has been fulfilled.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFourteen">
                            Home inspection
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseFourteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Limited non-invasive examination of a home's condition in connection with the sale of that home.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFifteen">
                            Radon inspection
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseFifteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            The only way to know whether a home has high levels of a radioactive gas.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSixteen">
                            Termite inspection
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseSixteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            A visual inspection of the readily accessible areas of a home for evidence of wood-destroying insects.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeventeen">
                            Home warranty
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseSeventeen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Contract between home owner and a home warranty company that provides for discounted repair and replacement service on a home's major components, such as the furnace, air conditioner, plumbing and electrical services.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseEighteen">
                            Easement
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseEighteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            A right to cross or otherwise use someone else's land for a specified purpose.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseNineteen">
                            Encroachment
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseNineteen" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Intrusion on a person's territory, rights, etc.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwenty">
                            Encroachment
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwenty" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Intrusion on a person's territory, rights, etc.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwentyOne">
                            Land surveyor
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwentyOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            An individual who works for county office that surveys properties to determine boundary lines and identify easements and encroachments that may affect the title on the property.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwentyTwo">
                            Title company
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwentyTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            An office or attorney involved in examining and insuring title claims for real estate purposes.  Services include doing title searches and performing closings.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwentyThree">
                            Closing
                        </a>
                        <span class="fa fa-2x fa-angle-down faq-drop"></span>
                    </div>
                    <div id="collapseTwentyThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            Final step in executing a real estate transaction. The closing date is set during the negotiation phase.
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <br>
        </div>

    </section>



@endsection
