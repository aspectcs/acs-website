@extends('layout.app')
@section('content')
    <section class="container" id="discovery-page">
        <div class="heading" aria-hidden="true">
            <p class="headline">Discovery Page</p>
            <p class="sub-headline">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="container">
            <form action="" id="signUpForm" class="text-dark">
                <!-- start step indicators -->
                <div class="form-header d-flex mb-4">
                    <span class="stepIndicator">Personal Details</span>
                    <span class="stepIndicator">Account Setup</span>
                    <span class="stepIndicator">Social Profiles</span>
                </div>
                <!-- end step indicators -->

                <!-- step one -->
                <div class="step">
                    <p class="text-center mb-4">Personal Details</p>
                    <div class="mb-3">
                        <input type="text" placeholder="Name" oninput="this.className = ''" name="name"/>
                    </div>
                    <div class="mb-3">
                        <input type="email" placeholder="Email Address" oninput="this.className = ''" name="email"/>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Phone" oninput="this.className = ''" name="phone"/>
                    </div>
                </div>

                <!-- step two -->
                <div class="step">
                    <p class="text-center mb-4">Your presence on the social network</p>
                    <div class="mb-3">
                        <input type="text" placeholder="Website" oninput="this.className = ''" name="website"/>
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Tell Us About Your Business" oninput="this.className = ''"
                                  name="about_your_business"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea
                            placeholder="Why should your customers buy from you than a competitor? (be specific of your Value proposition)"
                            oninput="this.className = ''" name="customers_buy"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea
                            placeholder="What is the typical sales process/cycle? EX: customer calls, then fills form, then sets appointment etc."
                            oninput="this.className = ''" name="typical_sales"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="What are the short and long term goals of the company?"
                                  oninput="this.className = ''" name="goals"></textarea>
                    </div>
                </div>

                <!-- step three -->
                <div class="step">
                    <p class="text-center mb-4">We will never sell it</p>
                    <div class="mb-3">
                        <input type="text" placeholder="What product or service would you like to sell more of?"
                               oninput="this.className = ''" name="product"/>
                    </div>
                    <div class="mb-3">
                        <input type="text"
                               placeholder="What is the average Lifetime value of your average customer? This is your profit over the life of that customer"
                               oninput="this.className = ''" name="average"/>
                    </div>
                    <div class="mb-3">
                        <textarea placeholder="Who is your ideal client?" oninput="this.className = ''"
                                  name="average"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-check-label">What knowledge of SEO exists within the company?</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">None</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                   value="option2">
                            <label class="form-check-label" for="inlineRadio2">A little</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                   value="option3">
                            <label class="form-check-label" for="inlineRadio3">A lot</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-check-label">Have you had previous SEO on your site? If so, please check the investment level.</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Under $500 per month</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Under $1000 per month</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Over $1000 per month</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea oninput="this.className = ''" name="keywords" rows="5" placeholder="Please write as many keywords as you can think of that you would like to target online. (Keywords are words typed into Google that your website will be visible for, example “Chicago Chiropractor”"></textarea>
                    </div>
                    <div class="mb-3">
                        <textarea oninput="this.className = ''" name="keywords" rows="3" placeholder="Please list radius and specific cities you would like to target. If your targeting national, just type in the Country name”"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="How many additional customers would you like to acquire a month? Please set a number."
                               oninput="this.className = ''" name="acquire"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-check-label">Are you doing any other forms of marketing. Check all that apply</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">SEO (Search Engine Optimization)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">PPC (Pay Per Click)</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Video Marketing</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Social Media</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">Offline Print, Radio, Media</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRadio1">None</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="What would you say has been your most effective advertising method?"
                               oninput="this.className = ''" name="acquire"/>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="What would you say has been your least effective advertising method?"
                               oninput="this.className = ''" name="acquire"/>
                    </div>
                    <div class="mb-3">
                        <textarea oninput="this.className = ''" name="keywords" rows="3" placeholder="Do you offer any special promotions to new customers? If so, what are they?"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Who is your competition?"
                               oninput="this.className = ''" name="acquire"/>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="What is your budget range for getting new customers?"
                               oninput="this.className = ''" name="acquire"/>
                    </div>
                    <div class="mb-3">
                        <textarea oninput="this.className = ''" name="keywords" rows="3" placeholder="What is your biggest concern working with a company for online marketing?"></textarea>
                    </div>
                </div>

                <!-- start previous / next buttons -->
                <div class="form-footer d-flex">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('script')
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("step");
            console.log(x);
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("step");
            // Exit the function if any field in the current tab is invalid:
            // if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
@endpush
