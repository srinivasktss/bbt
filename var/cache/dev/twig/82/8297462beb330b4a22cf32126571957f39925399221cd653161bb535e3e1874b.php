<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16d2157aa4ad9c2f0cc61510b85a5bf54478c6be44a231bc8865258d10db301d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbbb9bb99f04ee7229229d0507462941086c8402a76c887519b5525a07e0e05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbb9bb99f04ee7229229d0507462941086c8402a76c887519b5525a07e0e05e->enter($__internal_dbbb9bb99f04ee7229229d0507462941086c8402a76c887519b5525a07e0e05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a24adfe5c75d7b240a36fcaf580c4d89baae5be6d840a3543ba685e9262cb0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24adfe5c75d7b240a36fcaf580c4d89baae5be6d840a3543ba685e9262cb0d7->enter($__internal_a24adfe5c75d7b240a36fcaf580c4d89baae5be6d840a3543ba685e9262cb0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbb9bb99f04ee7229229d0507462941086c8402a76c887519b5525a07e0e05e->leave($__internal_dbbb9bb99f04ee7229229d0507462941086c8402a76c887519b5525a07e0e05e_prof);

        
        $__internal_a24adfe5c75d7b240a36fcaf580c4d89baae5be6d840a3543ba685e9262cb0d7->leave($__internal_a24adfe5c75d7b240a36fcaf580c4d89baae5be6d840a3543ba685e9262cb0d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73aab476722551248e01cd0afaa27dcc96bbc705c067160a8713405432ba4eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73aab476722551248e01cd0afaa27dcc96bbc705c067160a8713405432ba4eff->enter($__internal_73aab476722551248e01cd0afaa27dcc96bbc705c067160a8713405432ba4eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d038176d5c44450729a061cb83f6825b80c929e14d0d3e92f5214aeea5d68d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d038176d5c44450729a061cb83f6825b80c929e14d0d3e92f5214aeea5d68d5->enter($__internal_8d038176d5c44450729a061cb83f6825b80c929e14d0d3e92f5214aeea5d68d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8d038176d5c44450729a061cb83f6825b80c929e14d0d3e92f5214aeea5d68d5->leave($__internal_8d038176d5c44450729a061cb83f6825b80c929e14d0d3e92f5214aeea5d68d5_prof);

        
        $__internal_73aab476722551248e01cd0afaa27dcc96bbc705c067160a8713405432ba4eff->leave($__internal_73aab476722551248e01cd0afaa27dcc96bbc705c067160a8713405432ba4eff_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2ed60cc4271d830d85ba3804e0b5568b2126b9bd306d9dc6eee64bcc008d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da2ed60cc4271d830d85ba3804e0b5568b2126b9bd306d9dc6eee64bcc008d92->enter($__internal_da2ed60cc4271d830d85ba3804e0b5568b2126b9bd306d9dc6eee64bcc008d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d3c7e5053a6571ebe29864bb1c379240c2cc46c31bab70b65b507dcc6230dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3c7e5053a6571ebe29864bb1c379240c2cc46c31bab70b65b507dcc6230dd9->enter($__internal_1d3c7e5053a6571ebe29864bb1c379240c2cc46c31bab70b65b507dcc6230dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1d3c7e5053a6571ebe29864bb1c379240c2cc46c31bab70b65b507dcc6230dd9->leave($__internal_1d3c7e5053a6571ebe29864bb1c379240c2cc46c31bab70b65b507dcc6230dd9_prof);

        
        $__internal_da2ed60cc4271d830d85ba3804e0b5568b2126b9bd306d9dc6eee64bcc008d92->leave($__internal_da2ed60cc4271d830d85ba3804e0b5568b2126b9bd306d9dc6eee64bcc008d92_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4621ba2db3e2bec6e6d139e36c36cec3093b0f1af9942f193fec8dd426cabaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4621ba2db3e2bec6e6d139e36c36cec3093b0f1af9942f193fec8dd426cabaad->enter($__internal_4621ba2db3e2bec6e6d139e36c36cec3093b0f1af9942f193fec8dd426cabaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3946efce8ecb588c1f5ff0cef7fe81414f38843dc2f6413a4d0f50e6dadced3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3946efce8ecb588c1f5ff0cef7fe81414f38843dc2f6413a4d0f50e6dadced3f->enter($__internal_3946efce8ecb588c1f5ff0cef7fe81414f38843dc2f6413a4d0f50e6dadced3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3946efce8ecb588c1f5ff0cef7fe81414f38843dc2f6413a4d0f50e6dadced3f->leave($__internal_3946efce8ecb588c1f5ff0cef7fe81414f38843dc2f6413a4d0f50e6dadced3f_prof);

        
        $__internal_4621ba2db3e2bec6e6d139e36c36cec3093b0f1af9942f193fec8dd426cabaad->leave($__internal_4621ba2db3e2bec6e6d139e36c36cec3093b0f1af9942f193fec8dd426cabaad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\first\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
