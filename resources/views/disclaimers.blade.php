@extends('layouts.app1')
@section('title', 'Infinity Cans | Digital Printing for Aluminum Cans & Bottles')
@section('meta_description', "Infinity Cans offers premium digital printing services for aluminum cans and bottles.")
@section('content')
   <section class="disc-hero-section">
        <div class="disc-hero-bg"></div>
        <div class="disc-hero-overlay"></div>
        
        <div class="container">
            <div class="disc-hero-content" data-aos="fade-up">
                <h1 class="disc-hero-title">
                    <span class="disc-title-line">Legal</span>
                    <span class="disc-highlight">Disclaimers</span>
                </h1>
                <p class="disc-hero-subtitle">
                    Important legal disclaimers and notices regarding the use of our website, 
                    products, and services. Please read carefully before using our services.
                </p>
                <div class="disc-hero-notice">
                    <div class="disc-notice-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <p>This page contains important legal information that affects your rights and obligations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="disc-content-section">
        <div class="container">
            <div class="disc-content-wrapper">
                <!-- Table of Contents -->
                <aside class="disc-toc" data-aos="fade-right">
                    <h3 class="disc-toc-title">Contents</h3>
                    <nav class="disc-toc-nav">
                        <a href="#general" class="disc-toc-link">1. General Disclaimer</a>
                        <a href="#website" class="disc-toc-link">2. Website Use</a>
                        <a href="#products" class="disc-toc-link">3. Product Information</a>
                        <a href="#accuracy" class="disc-toc-link">4. Information Accuracy</a>
                        <a href="#liability" class="disc-toc-link">5. Limitation of Liability</a>
                        <a href="#external" class="disc-toc-link">6. External Links</a>
                        <a href="#professional" class="disc-toc-link">7. Professional Advice</a>
                        <a href="#changes" class="disc-toc-link">8. Changes to Disclaimers</a>
                        <a href="#contact" class="disc-toc-link">9. Contact Information</a>
                    </nav>
                </aside>

                <!-- Main Content -->
                <main class="disc-main-content" data-aos="fade-left">
                    <div class="disc-content-header">
                        <h2 class="disc-section-title">Legal Disclaimers</h2>
                        <p class="disc-last-updated">Last Updated: December 2024</p>
                    </div>

                    <!-- Section 1: General Disclaimer -->
                    <section id="general" class="disc-section">
                        <h3 class="disc-section-heading">1. General Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>The information contained on this website and in our materials is for general information purposes only. While we endeavor to keep the information up to date and correct, Infinity Cans makes no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the website or the information, products, services, or related graphics contained on the website for any purpose.</p>
                            
                            <div class="disc-warning-box">
                                <div class="disc-warning-icon">
                                    <i class="fas fa-exclamation-circle"></i>
                                </div>
                                <div class="disc-warning-content">
                                    <h4>Important Notice</h4>
                                    <p>Any reliance you place on such information is therefore strictly at your own risk. We disclaim any liability for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 2: Website Use -->
                    <section id="website" class="disc-section">
                        <h3 class="disc-section-heading">2. Website Use Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>This website and its content are provided on an "as is" basis without any representations or warranties, express or implied. We make no representations or warranties in relation to this website or the information and materials provided on this website.</p>
                            
                            <h4>Website Availability</h4>
                            <ul>
                                <li>We do not warrant that the website will be constantly available or available at all</li>
                                <li>We may suspend or withdraw or restrict the availability of all or any part of our website</li>
                                <li>We do not guarantee that the website will be secure or free from bugs or viruses</li>
                                <li>You are responsible for configuring your technology to access our website</li>
                            </ul>

                            <h4>User Responsibilities</h4>
                            <ul>
                                <li>Users must ensure their use of the website complies with applicable laws</li>
                                <li>Users are responsible for their own internet security</li>
                                <li>Users should verify information before making decisions based on website content</li>
                                <li>Users must respect intellectual property rights</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Section 3: Product Information -->
                    <section id="products" class="disc-section">
                        <h3 class="disc-section-heading">3. Product Information Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>All product information, specifications, pricing, and availability are subject to change without notice. While we strive to provide accurate product information, we do not warrant that product descriptions or other content is accurate, complete, reliable, current, or error-free.</p>
                            
                            <div class="disc-product-grid">
                                <div class="disc-product-item">
                                    <div class="disc-product-icon">
                                        <i class="fas fa-info-circle"></i>
                                    </div>
                                    <h5>Specifications</h5>
                                    <p>Product specifications are provided for reference only and may vary. Always confirm specifications before placing orders.</p>
                                </div>
                                
                                <div class="disc-product-item">
                                    <div class="disc-product-icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <h5>Pricing</h5>
                                    <p>Prices displayed are estimates and may change. Final pricing will be confirmed in written quotations.</p>
                                </div>
                                
                                <div class="disc-product-item">
                                    <div class="disc-product-icon">
                                        <i class="fas fa-calendar-alt"></i>
                                    </div>
                                    <h5>Availability</h5>
                                    <p>Product availability is subject to change. We cannot guarantee inventory levels or delivery dates.</p>
                                </div>
                                
                                <div class="disc-product-item">
                                    <div class="disc-product-icon">
                                        <i class="fas fa-palette"></i>
                                    </div>
                                    <h5>Visual Representation</h5>
                                    <p>Colors and designs shown may vary from actual products due to display settings and printing variations.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 4: Information Accuracy -->
                    <section id="accuracy" class="disc-section">
                        <h3 class="disc-section-heading">4. Information Accuracy Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>We make every effort to ensure that the information on our website is accurate and up-to-date. However, we cannot guarantee the accuracy, completeness, or timeliness of any information presented.</p>
                            
                            <h4>Information Updates</h4>
                            <ul>
                                <li>Information may become outdated without notice</li>
                                <li>We reserve the right to modify content at any time</li>
                                <li>Users should verify current information before making decisions</li>
                                <li>Technical specifications may change based on manufacturing improvements</li>
                            </ul>

                            <h4>Third-Party Information</h4>
                            <ul>
                                <li>Some information may be provided by third parties</li>
                                <li>We do not verify the accuracy of third-party information</li>
                                <li>Third-party content does not reflect our views or opinions</li>
                                <li>Users should independently verify third-party information</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Section 5: Limitation of Liability -->
                    <section id="liability" class="disc-section">
                        <h3 class="disc-section-heading">5. Limitation of Liability</h3>
                        <div class="disc-section-content">
                            <p>To the fullest extent permitted by law, Infinity Cans excludes all liability for any loss or damage arising from the use of this website or reliance on the information contained herein.</p>
                            
                            <div class="disc-liability-table">
                                <table class="disc-table">
                                    <thead>
                                        <tr>
                                            <th>Type of Loss</th>
                                            <th>Our Liability</th>
                                            <th>Explanation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Direct Damages</td>
                                            <td class="disc-liability-limited">Limited</td>
                                            <td>Limited to the value of the specific product or service</td>
                                        </tr>
                                        <tr>
                                            <td>Indirect Damages</td>
                                            <td class="disc-liability-excluded">Excluded</td>
                                            <td>Including loss of profits, business interruption, or consequential losses</td>
                                        </tr>
                                        <tr>
                                            <td>Website Downtime</td>
                                            <td class="disc-liability-excluded">Excluded</td>
                                            <td>No liability for temporary unavailability of website or services</td>
                                        </tr>
                                        <tr>
                                            <td>Information Errors</td>
                                            <td class="disc-liability-excluded">Excluded</td>
                                            <td>No liability for decisions made based on website information</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>

                    <!-- Section 6: External Links -->
                    <section id="external" class="disc-section">
                        <h3 class="disc-section-heading">6. External Links Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>Our website may contain links to external websites that are not provided or maintained by us. We have no control over the nature, content, and availability of those sites.</p>
                            
                            <div class="disc-external-notice">
                                <h4>External Link Policy</h4>
                                <ul>
                                    <li>The inclusion of any links does not necessarily imply a recommendation or endorsement</li>
                                    <li>We are not responsible for the content of external websites</li>
                                    <li>External websites have their own terms and privacy policies</li>
                                    <li>Users visit external links at their own risk</li>
                                    <li>We do not warrant the security of external websites</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <!-- Section 7: Professional Advice -->
                    <section id="professional" class="disc-section">
                        <h3 class="disc-section-heading">7. Professional Advice Disclaimer</h3>
                        <div class="disc-section-content">
                            <p>The information provided on our website is not intended to constitute professional advice. You should not rely on this information as a substitute for professional consultation.</p>
                            
                            <div class="disc-advice-grid">
                                <div class="disc-advice-item">
                                    <h5>Technical Advice</h5>
                                    <p>Technical information is provided for general guidance only. Consult with qualified professionals for specific technical requirements.</p>
                                </div>
                                
                                <div class="disc-advice-item">
                                    <h5>Legal Advice</h5>
                                    <p>Our content does not constitute legal advice. Consult with qualified legal professionals for legal matters.</p>
                                </div>
                                
                                <div class="disc-advice-item">
                                    <h5>Business Advice</h5>
                                    <p>Business recommendations are general in nature. Seek professional business consultation for specific decisions.</p>
                                </div>
                                
                                <div class="disc-advice-item">
                                    <h5>Safety Advice</h5>
                                    <p>Safety information is general. Always follow specific safety protocols and consult safety professionals.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Section 8: Changes to Disclaimers -->
                    <section id="changes" class="disc-section">
                        <h3 class="disc-section-heading">8. Changes to Disclaimers</h3>
                        <div class="disc-section-content">
                            <p>We reserve the right to modify these disclaimers at any time without prior notice. Your continued use of our website after any changes constitutes acceptance of the new disclaimers.</p>
                            
                            <h4>Update Notifications</h4>
                            <ul>
                                <li>We will update the "Last Updated" date when changes are made</li>
                                <li>Significant changes may be highlighted on our website</li>
                                <li>Users are responsible for reviewing disclaimers regularly</li>
                                <li>Previous versions of disclaimers are not maintained</li>
                            </ul>
                        </div>
                    </section>

                    <!-- Section 9: Contact Information -->
                    <section id="contact" class="disc-section">
                        <h3 class="disc-section-heading">9. Contact Information</h3>
                        <div class="disc-section-content">
                            <p>If you have any questions about these disclaimers or need clarification on any matters, please contact our legal department.</p>
                            
                            <div class="disc-contact-card">
                                <div class="disc-contact-header">
                                    <h4>Legal Department</h4>
                                    <p>Infinity Cans Legal Team</p>
                                </div>
                                <div class="disc-contact-details">
                                    <div class="disc-contact-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>legal@infinitycans.com</span>
                                    </div>
                                    <div class="disc-contact-item">
                                        <i class="fas fa-phone"></i>
                                        <span>+1 (555) 123-4567 ext. 300</span>
                                    </div>
                                    <div class="disc-contact-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>123 Industrial Avenue, Legal Department<br>Manufacturing District, CA 90001</span>
                                    </div>
                                    <div class="disc-contact-item">
                                        <i class="fas fa-clock"></i>
                                        <span>Business Hours: Monday-Friday, 9:00 AM - 5:00 PM EST</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </section>

@endsection