<?php

/* acp_update.html */
class __TwigTemplate_708a6f07fdc77fcf9c4d889decaecbb7afeb66290cfc74eaa5c8e4cdb6efd834 extends Twig_Template
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
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_update.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 10
            echo "\t<div class=\"successbox\">
\t\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("VERSION_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        } else {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("VERSION_NOT_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        }
        // line 18
        echo "
<fieldset>
\t<legend></legend>
\t<dl>
\t\t<dt><label>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("CURRENT_VERSION");
        echo "</label></dt>
\t\t<dd><strong>";
        // line 23
        echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
        echo "</strong></dd>
\t</dl>
</fieldset>

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
            // line 28
            echo "\t<fieldset>
\t\t<legend></legend>
\t\t<dl>
\t\t\t<dt><label>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</label></dt>
\t\t\t<dd><strong>";
            // line 32
            echo $this->getAttribute($context["updates_available"], "current", array());
            echo "</strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
            echo "</label></dt>
\t\t\t<dd><strong><a href=\"";
            // line 36
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "\">";
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "</a></strong></dd>
\t\t</dl>
\t</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
        if ( !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 42
            echo "\t";
            echo (isset($context["UPDATE_INSTRUCTIONS"]) ? $context["UPDATE_INSTRUCTIONS"] : null);
            echo "
\t<br /><br />
";
        }
        // line 45
        echo "
";
        // line 46
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_update.html", 46)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  138 => 45,  131 => 42,  129 => 41,  126 => 40,  114 => 36,  110 => 35,  104 => 32,  100 => 31,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  74 => 18,  64 => 15,  61 => 14,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <h1>{L_VERSION_CHECK}</h1>*/
/* */
/* <p>{L_VERSION_CHECK_EXPLAIN}</p>*/
/* */
/* <!-- IF S_UP_TO_DATE -->*/
/* 	<div class="successbox">*/
/* 		<p>{L_VERSION_UP_TO_DATE_ACP} - <a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a></p>*/
/* 	</div>*/
/* <!-- ELSE -->*/
/* 	<div class="errorbox">*/
/* 		<p>{L_VERSION_NOT_UP_TO_DATE_ACP} - <a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE}</a></p>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <fieldset>*/
/* 	<legend></legend>*/
/* 	<dl>*/
/* 		<dt><label>{L_CURRENT_VERSION}</label></dt>*/
/* 		<dd><strong>{CURRENT_VERSION}</strong></dd>*/
/* 	</dl>*/
/* </fieldset>*/
/* */
/* <!-- BEGIN updates_available -->*/
/* 	<fieldset>*/
/* 		<legend></legend>*/
/* 		<dl>*/
/* 			<dt><label>{L_LATEST_VERSION}</label></dt>*/
/* 			<dd><strong>{updates_available.current}</strong></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label>{L_RELEASE_ANNOUNCEMENT}</label></dt>*/
/* 			<dd><strong><a href="{updates_available.announcement}">{updates_available.announcement}</a></strong></dd>*/
/* 		</dl>*/
/* 	</fieldset>*/
/* <!-- END updates_available -->*/
/* */
/* <!-- IF not S_UP_TO_DATE -->*/
/* 	{UPDATE_INSTRUCTIONS}*/
/* 	<br /><br />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
