<?php

/* PublicBundle:Modules:track.module.html.twig */
class __TwigTemplate_371950a0e3758629fef480e48771a6c8d44d228e60b896f6bb4c50c478af3ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64e7bd7633aac35ae7af6aa3a3be88e30082b2b842ddaeb555209a8e4ffc2357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e7bd7633aac35ae7af6aa3a3be88e30082b2b842ddaeb555209a8e4ffc2357->enter($__internal_64e7bd7633aac35ae7af6aa3a3be88e30082b2b842ddaeb555209a8e4ffc2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Modules:track.module.html.twig"));

        // line 1
        echo "<!-- section begin -->
      <section id=\"section-tracking\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-8 col-md-offset-2\">
                      <div class=\"cta-form wow fadeIn\" data-wow-delay=\"0s\" data-wow-duration=\"1s\">
                          <input id=\"track-number\" type=\"text\" name=\"track\" value=\"\" placeholder=\"Insert tracking number here...\">
                          <input type=\"submit\" id=\"track-it\" name=\"submit\" value=\"TRACK IT\">
                          <div class=\"clearfix\"></div>
                      </div>

                  </div>
              </div>
          </div>
          <div id=\"section-tracking-error\" class=\"light-text\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"divider-double\"></div>
                        <div class=\"text-center\">
                            <h3><span class=\"grey\">Product ID:</span> No encontrado</h3>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div id=\"section-tracking-result\" class=\"light-text\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-md-8 col-md-offset-2\">
                          <div class=\"divider-double\"></div>
                          <div class=\"text-center\">
                              <h3><span class=\"grey\">Product ID:</span> 112345679087328</h3>
                          </div>


                          <div class=\"divider-double\"></div>

                          <div class=\"wrapper-line padding40 rounded10\">


                              <ul class=\"progress\">
                                  <li><a href=\"\">Accepted</a></li>
                                  <li class=\"beforeactive\"><a href=\"\">Order Processing</a></li>
                                  <li class=\"active\"><a href=\"\">Shipment Pending</a></li>
                                  <li><a href=\"\">Estimated Delivery</a></li>
                              </ul>

                              <div class=\"divider-double\"></div>

                              <ul class=\"timeline custom-tl\">

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge success\"><i class=\"fa fa-check-square-o wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment has been successfully delivered
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge warning\"><i class=\"fa fa-warning wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment could not be delivered
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment has arrived in destination country
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 02, 2015
<span>18:05 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment is being transformed to destination country
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 01, 2015
<span>10:08 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The international shipment has been processed
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>


                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </section>
<!-- section close -->
";
        
        $__internal_64e7bd7633aac35ae7af6aa3a3be88e30082b2b842ddaeb555209a8e4ffc2357->leave($__internal_64e7bd7633aac35ae7af6aa3a3be88e30082b2b842ddaeb555209a8e4ffc2357_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Modules:track.module.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<!-- section begin -->
      <section id=\"section-tracking\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-md-8 col-md-offset-2\">
                      <div class=\"cta-form wow fadeIn\" data-wow-delay=\"0s\" data-wow-duration=\"1s\">
                          <input id=\"track-number\" type=\"text\" name=\"track\" value=\"\" placeholder=\"Insert tracking number here...\">
                          <input type=\"submit\" id=\"track-it\" name=\"submit\" value=\"TRACK IT\">
                          <div class=\"clearfix\"></div>
                      </div>

                  </div>
              </div>
          </div>
          <div id=\"section-tracking-error\" class=\"light-text\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 col-md-offset-2\">
                        <div class=\"divider-double\"></div>
                        <div class=\"text-center\">
                            <h3><span class=\"grey\">Product ID:</span> No encontrado</h3>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div id=\"section-tracking-result\" class=\"light-text\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-md-8 col-md-offset-2\">
                          <div class=\"divider-double\"></div>
                          <div class=\"text-center\">
                              <h3><span class=\"grey\">Product ID:</span> 112345679087328</h3>
                          </div>


                          <div class=\"divider-double\"></div>

                          <div class=\"wrapper-line padding40 rounded10\">


                              <ul class=\"progress\">
                                  <li><a href=\"\">Accepted</a></li>
                                  <li class=\"beforeactive\"><a href=\"\">Order Processing</a></li>
                                  <li class=\"active\"><a href=\"\">Shipment Pending</a></li>
                                  <li><a href=\"\">Estimated Delivery</a></li>
                              </ul>

                              <div class=\"divider-double\"></div>

                              <ul class=\"timeline custom-tl\">

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge success\"><i class=\"fa fa-check-square-o wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment has been successfully delivered
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge warning\"><i class=\"fa fa-warning wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment could not be delivered
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 03, 2015
<span>20:07 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment has arrived in destination country
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 02, 2015
<span>18:05 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The shipment is being transformed to destination country
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>

                                  <li class=\"timeline-inverted\">
                                      <div class=\"timeline-date wow zoomIn\" data-wow-delay=\".2s\">
                                          Nov 01, 2015
<span>10:08 pm</span>
                                      </div>
                                      <div class=\"timeline-badge\"><i class=\"fa fa-plane wow zoomIn\"></i></div>
                                      <div class=\"timeline-panel wow fadeInRight\" data-wow-delay=\".6s\">
                                          <div class=\"timeline-body\">
                                              The international shipment has been processed
  <span class=\"location\">Baker Street, UK <a href=\"https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom\" class=\"popup-gmaps\">view on map</a></span>
                                          </div>
                                      </div>
                                  </li>
                              </ul>


                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </section>
<!-- section close -->
";
    }
}
