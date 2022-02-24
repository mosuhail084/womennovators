@extends('frontEnd.layout.layout') @section('frontend_content')
<!-- Main content Start -->
<div class="main-content">
 
<section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                    @if(session()->has('status'))
                        <div class="alert alert-success">
                            @if(is_array(session()->get('status')))
                            @foreach (session()->get('status') as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                            @else
                            <p>{{ session()->get('success') }}</p>
                            @endif
                        </div>
                        @endif
                       
                         <div class="sec-title mb-30">
                            <h2 class="title mb-10"></h2>
                            <div class="styled-form">
                                <p>&nbsp;</p>
<h2 style="text-align: center;"><strong>OUR PRIVACY POLICY</strong></h2>
<p>&nbsp;</p>
<p><strong>SECTION 1 &ndash; WHAT DO WE DO WITH YOUR INFORMATION?</strong></p>
<p>When you purchase something from us, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.</p>
<p>When you browse our site/store, we also automatically receive your computer&rsquo;s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.</p>
<p>Email marketing (if applicable): With your permission, we may send you emails about our products and services, blogs, and/or new products and other updates.</p>
<p><strong>SECTION 2 &ndash; CONSENT</strong></p>
<p>How do you get my consent?</p>
<p>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.</p>
<p>If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>
<p>How do I withdraw my consent?</p>
<p>If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at any time, by contacting us at contact@covidcaregiver.org</p>
<p><strong>SECTION 3 &ndash; DISCLOSURE</strong></p>
<p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>
<p><strong>SECTION 4 - PAYMENT</strong></p>
<p>We use Razorpay for processing payments. We/Razorpay do not store your card data on their servers. The data is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS) when processing payment. Your purchase transaction data is only used as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is not saved.</p>
<p>Our payment gateway adheres to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.</p>
<p>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.</p>
<p>For more insight, you may also want to read terms and conditions of razorpay on&nbsp;<a href="https://razorpay.com/">https://razorpay.com</a></p>
<p><strong>SECTION 5 &ndash; THIRD-PARTY SERVICES</strong></p>
<p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</p>
<p>However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>
<p>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.</p>
<p>In particular, remember that certain providers may be located in or have facilities that are located in a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>
<p>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.</p>
<p>Once you leave our website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website&rsquo;s Terms of Service.</p>
<p>Links</p>
<p>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.</p>
<p><strong>SECTION 6 &ndash; SECURITY</strong></p>
<p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards.</p>
<p><strong>SECTION 7 &ndash; AGE OF CONSENT</strong></p>
<p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>
<p><strong>SECTION 8 &ndash; CHANGES TO THIS PRIVACY POLICY</strong></p>
<p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>
<p>If our site/store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to market and sell products and services to you.</p>
<p><strong>QUESTIONS AND CONTACT INFORMATION</strong></p>
<p>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact us at&nbsp;<a href="mailto:contact@covidcaregiver.org">contact@covidcaregiver.org</a></p>

                            </div> 
                        </div>
                     </div>
                </div>
                
               
                
            </section>
            <!-- End Login Section --> 
</div> 
        <!-- Main content End --> 
@endsection