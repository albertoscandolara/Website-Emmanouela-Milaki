<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/05.news/02._newsletter */
class __TwigTemplate_85a7ec516cccc606cb9cc3523af380c6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"newsletter\">
    <h3>Be the first to know the news!</h3>
    <p>Subscribe to our Newsletter to stay informed about school psychology issues, as well as the organization of lectures, experiential workshops and other activities!</p>

    














<form
        name=\"\"
    action=\"/en/news/_newsletter\"
    method=\"POST\"
                      class=\" \"          >
        
            

        <input type=\"hidden\" name=\"__form-name__\" value=\"\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"0cL9DNOkitnSTf2YMbyl\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"321fd54a641427c1b6122605c7aa7957\" />
    
      
            <div class=\"button-wrapper\">
  

            
        </div>
  
  </form>


</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/05.news/02._newsletter";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"newsletter\">
    <h3>Be the first to know the news!</h3>
    <p>Subscribe to our Newsletter to stay informed about school psychology issues, as well as the organization of lectures, experiential workshops and other activities!</p>

    














<form
        name=\"\"
    action=\"/en/news/_newsletter\"
    method=\"POST\"
                      class=\" \"          >
        
            

        <input type=\"hidden\" name=\"__form-name__\" value=\"\" />
            <input type=\"hidden\" name=\"__unique_form_id__\" value=\"0cL9DNOkitnSTf2YMbyl\" />
    <input type=\"hidden\" name=\"form-nonce\" value=\"321fd54a641427c1b6122605c7aa7957\" />
    
      
            <div class=\"button-wrapper\">
  

            
        </div>
  
  </form>


</div>", "@Page:C:/Users/alber/Downloads/grav-admin-v1.8.0-beta.3/grav-admin/user/pages/05.news/02._newsletter", "");
    }
}
