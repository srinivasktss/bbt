<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_296e4a3fa61bac1f045b59482fe4f8e6a48cceea7677469536bbe1cd34806d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14cf03907b35f311c6eaa0756d5e62378053f0b7116910d307d8b15fee788e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cf03907b35f311c6eaa0756d5e62378053f0b7116910d307d8b15fee788e78->enter($__internal_14cf03907b35f311c6eaa0756d5e62378053f0b7116910d307d8b15fee788e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a38152056e9ed141afa6eaf72b76ffadfe69ea0830b706c88a380e61a7025ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38152056e9ed141afa6eaf72b76ffadfe69ea0830b706c88a380e61a7025ed0->enter($__internal_a38152056e9ed141afa6eaf72b76ffadfe69ea0830b706c88a380e61a7025ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_14cf03907b35f311c6eaa0756d5e62378053f0b7116910d307d8b15fee788e78->leave($__internal_14cf03907b35f311c6eaa0756d5e62378053f0b7116910d307d8b15fee788e78_prof);

        
        $__internal_a38152056e9ed141afa6eaf72b76ffadfe69ea0830b706c88a380e61a7025ed0->leave($__internal_a38152056e9ed141afa6eaf72b76ffadfe69ea0830b706c88a380e61a7025ed0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ff2f0c275ccf8b9a5f9211e1488f526505483fc5ad1f2ae530e819dbda0de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ff2f0c275ccf8b9a5f9211e1488f526505483fc5ad1f2ae530e819dbda0de0->enter($__internal_74ff2f0c275ccf8b9a5f9211e1488f526505483fc5ad1f2ae530e819dbda0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdd9c069a3faa92a82dbb26a6f0f01c3cd64653d0c35b90634f6205742ed2f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd9c069a3faa92a82dbb26a6f0f01c3cd64653d0c35b90634f6205742ed2f4a->enter($__internal_fdd9c069a3faa92a82dbb26a6f0f01c3cd64653d0c35b90634f6205742ed2f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fdd9c069a3faa92a82dbb26a6f0f01c3cd64653d0c35b90634f6205742ed2f4a->leave($__internal_fdd9c069a3faa92a82dbb26a6f0f01c3cd64653d0c35b90634f6205742ed2f4a_prof);

        
        $__internal_74ff2f0c275ccf8b9a5f9211e1488f526505483fc5ad1f2ae530e819dbda0de0->leave($__internal_74ff2f0c275ccf8b9a5f9211e1488f526505483fc5ad1f2ae530e819dbda0de0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_90214a78774fee9f73e58e0f5f242f7c1ca0c9819415199737351d6317a1f4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90214a78774fee9f73e58e0f5f242f7c1ca0c9819415199737351d6317a1f4da->enter($__internal_90214a78774fee9f73e58e0f5f242f7c1ca0c9819415199737351d6317a1f4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_16a6ad741b21429731a4515fb4d9a68934c1e3ada59b3a5c9a621b0d9e54c483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a6ad741b21429731a4515fb4d9a68934c1e3ada59b3a5c9a621b0d9e54c483->enter($__internal_16a6ad741b21429731a4515fb4d9a68934c1e3ada59b3a5c9a621b0d9e54c483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_16a6ad741b21429731a4515fb4d9a68934c1e3ada59b3a5c9a621b0d9e54c483->leave($__internal_16a6ad741b21429731a4515fb4d9a68934c1e3ada59b3a5c9a621b0d9e54c483_prof);

        
        $__internal_90214a78774fee9f73e58e0f5f242f7c1ca0c9819415199737351d6317a1f4da->leave($__internal_90214a78774fee9f73e58e0f5f242f7c1ca0c9819415199737351d6317a1f4da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cfaa26cb9fb68dd7f033f4fc926db4f4afae115e3e04149a76566f8d6b27e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cfaa26cb9fb68dd7f033f4fc926db4f4afae115e3e04149a76566f8d6b27e0a->enter($__internal_2cfaa26cb9fb68dd7f033f4fc926db4f4afae115e3e04149a76566f8d6b27e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d967a65a2064eef31332b97ade929a36aad086f34cfdd19a9a053c9ed1897655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d967a65a2064eef31332b97ade929a36aad086f34cfdd19a9a053c9ed1897655->enter($__internal_d967a65a2064eef31332b97ade929a36aad086f34cfdd19a9a053c9ed1897655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d967a65a2064eef31332b97ade929a36aad086f34cfdd19a9a053c9ed1897655->leave($__internal_d967a65a2064eef31332b97ade929a36aad086f34cfdd19a9a053c9ed1897655_prof);

        
        $__internal_2cfaa26cb9fb68dd7f033f4fc926db4f4afae115e3e04149a76566f8d6b27e0a->leave($__internal_2cfaa26cb9fb68dd7f033f4fc926db4f4afae115e3e04149a76566f8d6b27e0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\first\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
