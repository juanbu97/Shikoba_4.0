<?php

/* form_div_layout.html.twig */
class __TwigTemplate_947244d191c6d326112d87e4d31c72f861e9dd4daaea6aa7cc0f84fa7a46bc1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c942ae51b73f92674e1c23ac5b7daeaf5ed234f587e15f441b5a90f44e4da537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c942ae51b73f92674e1c23ac5b7daeaf5ed234f587e15f441b5a90f44e4da537->enter($__internal_c942ae51b73f92674e1c23ac5b7daeaf5ed234f587e15f441b5a90f44e4da537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_c942ae51b73f92674e1c23ac5b7daeaf5ed234f587e15f441b5a90f44e4da537->leave($__internal_c942ae51b73f92674e1c23ac5b7daeaf5ed234f587e15f441b5a90f44e4da537_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_69e874411abf988589e08e13d40b892b655b2e499166408e0434321e32dfbb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e874411abf988589e08e13d40b892b655b2e499166408e0434321e32dfbb03->enter($__internal_69e874411abf988589e08e13d40b892b655b2e499166408e0434321e32dfbb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_69e874411abf988589e08e13d40b892b655b2e499166408e0434321e32dfbb03->leave($__internal_69e874411abf988589e08e13d40b892b655b2e499166408e0434321e32dfbb03_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e66d7ca344b582e66e18475d38a5c63aed7998ac22312f6bd041a40c7c040f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66d7ca344b582e66e18475d38a5c63aed7998ac22312f6bd041a40c7c040f14->enter($__internal_e66d7ca344b582e66e18475d38a5c63aed7998ac22312f6bd041a40c7c040f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_e66d7ca344b582e66e18475d38a5c63aed7998ac22312f6bd041a40c7c040f14->leave($__internal_e66d7ca344b582e66e18475d38a5c63aed7998ac22312f6bd041a40c7c040f14_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f1cab64a1de0e324bb09bfa0ef743df83fa2f9824c5150e3edf35bb5de2b337b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cab64a1de0e324bb09bfa0ef743df83fa2f9824c5150e3edf35bb5de2b337b->enter($__internal_f1cab64a1de0e324bb09bfa0ef743df83fa2f9824c5150e3edf35bb5de2b337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_f1cab64a1de0e324bb09bfa0ef743df83fa2f9824c5150e3edf35bb5de2b337b->leave($__internal_f1cab64a1de0e324bb09bfa0ef743df83fa2f9824c5150e3edf35bb5de2b337b_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_08dbb6397ec572cdb7bfdb17b4f8b8e34887fa9210a82e1b77036adf193a22ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dbb6397ec572cdb7bfdb17b4f8b8e34887fa9210a82e1b77036adf193a22ca->enter($__internal_08dbb6397ec572cdb7bfdb17b4f8b8e34887fa9210a82e1b77036adf193a22ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_08dbb6397ec572cdb7bfdb17b4f8b8e34887fa9210a82e1b77036adf193a22ca->leave($__internal_08dbb6397ec572cdb7bfdb17b4f8b8e34887fa9210a82e1b77036adf193a22ca_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c6172e17174457943ce8e63d5fe3487471fe9617954a212a5343d199b45a2268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6172e17174457943ce8e63d5fe3487471fe9617954a212a5343d199b45a2268->enter($__internal_c6172e17174457943ce8e63d5fe3487471fe9617954a212a5343d199b45a2268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_c6172e17174457943ce8e63d5fe3487471fe9617954a212a5343d199b45a2268->leave($__internal_c6172e17174457943ce8e63d5fe3487471fe9617954a212a5343d199b45a2268_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_12965b954f7462625273e33be760749bc2dd57d16c2a40d0474fc405dc99d16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12965b954f7462625273e33be760749bc2dd57d16c2a40d0474fc405dc99d16a->enter($__internal_12965b954f7462625273e33be760749bc2dd57d16c2a40d0474fc405dc99d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_12965b954f7462625273e33be760749bc2dd57d16c2a40d0474fc405dc99d16a->leave($__internal_12965b954f7462625273e33be760749bc2dd57d16c2a40d0474fc405dc99d16a_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b6ca5fa878dd7b6727b21ea87e8a6132c0d81c8ef69fb8513257c155961de261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ca5fa878dd7b6727b21ea87e8a6132c0d81c8ef69fb8513257c155961de261->enter($__internal_b6ca5fa878dd7b6727b21ea87e8a6132c0d81c8ef69fb8513257c155961de261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_b6ca5fa878dd7b6727b21ea87e8a6132c0d81c8ef69fb8513257c155961de261->leave($__internal_b6ca5fa878dd7b6727b21ea87e8a6132c0d81c8ef69fb8513257c155961de261_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3e76e6e8bd58539b08ef65561f7ea6ee16b70f08010d91957e1518e95a1feed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e76e6e8bd58539b08ef65561f7ea6ee16b70f08010d91957e1518e95a1feed6->enter($__internal_3e76e6e8bd58539b08ef65561f7ea6ee16b70f08010d91957e1518e95a1feed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if (((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple"))) && ( !$this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true) || ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_3e76e6e8bd58539b08ef65561f7ea6ee16b70f08010d91957e1518e95a1feed6->leave($__internal_3e76e6e8bd58539b08ef65561f7ea6ee16b70f08010d91957e1518e95a1feed6_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_4dd24151bafb23a7ad22fcea0c0ffa4c0284665642b8b031a02406a818a77d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd24151bafb23a7ad22fcea0c0ffa4c0284665642b8b031a02406a818a77d58->enter($__internal_4dd24151bafb23a7ad22fcea0c0ffa4c0284665642b8b031a02406a818a77d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    $__internal_4b555bcbfd813f1a888dd027531e0b66531d847d33ac47768b7ffbe602d3e364 = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_4b555bcbfd813f1a888dd027531e0b66531d847d33ac47768b7ffbe602d3e364)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_4b555bcbfd813f1a888dd027531e0b66531d847d33ac47768b7ffbe602d3e364);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4dd24151bafb23a7ad22fcea0c0ffa4c0284665642b8b031a02406a818a77d58->leave($__internal_4dd24151bafb23a7ad22fcea0c0ffa4c0284665642b8b031a02406a818a77d58_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6a320e3265d8bfa001702dbd635abb9c19d1f2117f3cb5ee82a20bbedc0b2881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a320e3265d8bfa001702dbd635abb9c19d1f2117f3cb5ee82a20bbedc0b2881->enter($__internal_6a320e3265d8bfa001702dbd635abb9c19d1f2117f3cb5ee82a20bbedc0b2881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_6a320e3265d8bfa001702dbd635abb9c19d1f2117f3cb5ee82a20bbedc0b2881->leave($__internal_6a320e3265d8bfa001702dbd635abb9c19d1f2117f3cb5ee82a20bbedc0b2881_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1a7477bfab0821ecc23093074c3bb9b43882dd74541514945991641fd91befe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7477bfab0821ecc23093074c3bb9b43882dd74541514945991641fd91befe3->enter($__internal_1a7477bfab0821ecc23093074c3bb9b43882dd74541514945991641fd91befe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_1a7477bfab0821ecc23093074c3bb9b43882dd74541514945991641fd91befe3->leave($__internal_1a7477bfab0821ecc23093074c3bb9b43882dd74541514945991641fd91befe3_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f88b7a9ed7bf15727c61ad64970671db74843c072d5eeb864633dc5a40f212e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88b7a9ed7bf15727c61ad64970671db74843c072d5eeb864633dc5a40f212e4->enter($__internal_f88b7a9ed7bf15727c61ad64970671db74843c072d5eeb864633dc5a40f212e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_f88b7a9ed7bf15727c61ad64970671db74843c072d5eeb864633dc5a40f212e4->leave($__internal_f88b7a9ed7bf15727c61ad64970671db74843c072d5eeb864633dc5a40f212e4_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9cf6c806c44364618b4f25ff8f2e662fe4eb3b2234fd922c2d29661ec6791f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf6c806c44364618b4f25ff8f2e662fe4eb3b2234fd922c2d29661ec6791f56->enter($__internal_9cf6c806c44364618b4f25ff8f2e662fe4eb3b2234fd922c2d29661ec6791f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_9cf6c806c44364618b4f25ff8f2e662fe4eb3b2234fd922c2d29661ec6791f56->leave($__internal_9cf6c806c44364618b4f25ff8f2e662fe4eb3b2234fd922c2d29661ec6791f56_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d80efa77f68ba991f562986edf4849b242a50cc30087f0a054a97e656fbb3fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80efa77f68ba991f562986edf4849b242a50cc30087f0a054a97e656fbb3fd9->enter($__internal_d80efa77f68ba991f562986edf4849b242a50cc30087f0a054a97e656fbb3fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = (((($context["widget"] ?? $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget', ($context["vars"] ?? $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_d80efa77f68ba991f562986edf4849b242a50cc30087f0a054a97e656fbb3fd9->leave($__internal_d80efa77f68ba991f562986edf4849b242a50cc30087f0a054a97e656fbb3fd9_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_6a2b9554d2b84c6d85d415e64ff11ecbc77c29f8414e81787f4da77c63396142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2b9554d2b84c6d85d415e64ff11ecbc77c29f8414e81787f4da77c63396142->enter($__internal_6a2b9554d2b84c6d85d415e64ff11ecbc77c29f8414e81787f4da77c63396142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_6a2b9554d2b84c6d85d415e64ff11ecbc77c29f8414e81787f4da77c63396142->leave($__internal_6a2b9554d2b84c6d85d415e64ff11ecbc77c29f8414e81787f4da77c63396142_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_58f545b3a0136e73dda222dffc4698aa5ddd3e60bd0f6bbd05b8b357d8f14b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f545b3a0136e73dda222dffc4698aa5ddd3e60bd0f6bbd05b8b357d8f14b0f->enter($__internal_58f545b3a0136e73dda222dffc4698aa5ddd3e60bd0f6bbd05b8b357d8f14b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_58f545b3a0136e73dda222dffc4698aa5ddd3e60bd0f6bbd05b8b357d8f14b0f->leave($__internal_58f545b3a0136e73dda222dffc4698aa5ddd3e60bd0f6bbd05b8b357d8f14b0f_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_9df5d25ea3fb822adf3a4ab0cb6a0acbb5304e3888d0f6951b0a9ea7e5cc3cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df5d25ea3fb822adf3a4ab0cb6a0acbb5304e3888d0f6951b0a9ea7e5cc3cdc->enter($__internal_9df5d25ea3fb822adf3a4ab0cb6a0acbb5304e3888d0f6951b0a9ea7e5cc3cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9df5d25ea3fb822adf3a4ab0cb6a0acbb5304e3888d0f6951b0a9ea7e5cc3cdc->leave($__internal_9df5d25ea3fb822adf3a4ab0cb6a0acbb5304e3888d0f6951b0a9ea7e5cc3cdc_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9e825937ebb356d00004c411fc38ff2a7d41907083f91fb7cc263bdf0d583ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e825937ebb356d00004c411fc38ff2a7d41907083f91fb7cc263bdf0d583ae8->enter($__internal_9e825937ebb356d00004c411fc38ff2a7d41907083f91fb7cc263bdf0d583ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_9e825937ebb356d00004c411fc38ff2a7d41907083f91fb7cc263bdf0d583ae8->leave($__internal_9e825937ebb356d00004c411fc38ff2a7d41907083f91fb7cc263bdf0d583ae8_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_bf3c3ce296bf966bbb0c2cfcea5a6218d90decb0177ec24ef1d474fd38c9684e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3c3ce296bf966bbb0c2cfcea5a6218d90decb0177ec24ef1d474fd38c9684e->enter($__internal_bf3c3ce296bf966bbb0c2cfcea5a6218d90decb0177ec24ef1d474fd38c9684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf3c3ce296bf966bbb0c2cfcea5a6218d90decb0177ec24ef1d474fd38c9684e->leave($__internal_bf3c3ce296bf966bbb0c2cfcea5a6218d90decb0177ec24ef1d474fd38c9684e_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_54fcf04f6f66209916c8b8ef6326cc8aca12606fbdafe3db564441aaca13b45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fcf04f6f66209916c8b8ef6326cc8aca12606fbdafe3db564441aaca13b45e->enter($__internal_54fcf04f6f66209916c8b8ef6326cc8aca12606fbdafe3db564441aaca13b45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_54fcf04f6f66209916c8b8ef6326cc8aca12606fbdafe3db564441aaca13b45e->leave($__internal_54fcf04f6f66209916c8b8ef6326cc8aca12606fbdafe3db564441aaca13b45e_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7cc4b7a67c61b579c9a5c8394b0b6c5c6a453d414a8d6c3ee9f0b9b74d7b833a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc4b7a67c61b579c9a5c8394b0b6c5c6a453d414a8d6c3ee9f0b9b74d7b833a->enter($__internal_7cc4b7a67c61b579c9a5c8394b0b6c5c6a453d414a8d6c3ee9f0b9b74d7b833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_7cc4b7a67c61b579c9a5c8394b0b6c5c6a453d414a8d6c3ee9f0b9b74d7b833a->leave($__internal_7cc4b7a67c61b579c9a5c8394b0b6c5c6a453d414a8d6c3ee9f0b9b74d7b833a_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_7f5555cfa7661648ed2e4a166a6f823bc642325e0530698f5c2701a893228dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5555cfa7661648ed2e4a166a6f823bc642325e0530698f5c2701a893228dd2->enter($__internal_7f5555cfa7661648ed2e4a166a6f823bc642325e0530698f5c2701a893228dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7f5555cfa7661648ed2e4a166a6f823bc642325e0530698f5c2701a893228dd2->leave($__internal_7f5555cfa7661648ed2e4a166a6f823bc642325e0530698f5c2701a893228dd2_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_51791a52da9792eca4c547032b528ff3088a4937c9f1016093a15424776110a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51791a52da9792eca4c547032b528ff3088a4937c9f1016093a15424776110a4->enter($__internal_51791a52da9792eca4c547032b528ff3088a4937c9f1016093a15424776110a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_51791a52da9792eca4c547032b528ff3088a4937c9f1016093a15424776110a4->leave($__internal_51791a52da9792eca4c547032b528ff3088a4937c9f1016093a15424776110a4_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_6bddce36f9b0bcc2a51ddf8f8c2337b3bbf7b0953328e51c27474168c3085214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bddce36f9b0bcc2a51ddf8f8c2337b3bbf7b0953328e51c27474168c3085214->enter($__internal_6bddce36f9b0bcc2a51ddf8f8c2337b3bbf7b0953328e51c27474168c3085214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6bddce36f9b0bcc2a51ddf8f8c2337b3bbf7b0953328e51c27474168c3085214->leave($__internal_6bddce36f9b0bcc2a51ddf8f8c2337b3bbf7b0953328e51c27474168c3085214_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_2a4a3269a45caf7fe9399b9d6b7433c6d8ab2856915d937ef086308cbb0e33ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4a3269a45caf7fe9399b9d6b7433c6d8ab2856915d937ef086308cbb0e33ca->enter($__internal_2a4a3269a45caf7fe9399b9d6b7433c6d8ab2856915d937ef086308cbb0e33ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2a4a3269a45caf7fe9399b9d6b7433c6d8ab2856915d937ef086308cbb0e33ca->leave($__internal_2a4a3269a45caf7fe9399b9d6b7433c6d8ab2856915d937ef086308cbb0e33ca_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_88ededa618e0184675bd51d7239a2897dc81a5751351a5273b9ebaed888bc151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ededa618e0184675bd51d7239a2897dc81a5751351a5273b9ebaed888bc151->enter($__internal_88ededa618e0184675bd51d7239a2897dc81a5751351a5273b9ebaed888bc151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
            // line 220
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 221
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 222
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 223
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_88ededa618e0184675bd51d7239a2897dc81a5751351a5273b9ebaed888bc151->leave($__internal_88ededa618e0184675bd51d7239a2897dc81a5751351a5273b9ebaed888bc151_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_6bc10fe9117e9ac99962dd40b912a5b1c4eee0c68a6d3d4936213e939904724d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc10fe9117e9ac99962dd40b912a5b1c4eee0c68a6d3d4936213e939904724d->enter($__internal_6bc10fe9117e9ac99962dd40b912a5b1c4eee0c68a6d3d4936213e939904724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_6bc10fe9117e9ac99962dd40b912a5b1c4eee0c68a6d3d4936213e939904724d->leave($__internal_6bc10fe9117e9ac99962dd40b912a5b1c4eee0c68a6d3d4936213e939904724d_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_b1ef4b5f7f074470dcef5809b74116dae52cd04aabec4352043c536cb82b72ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ef4b5f7f074470dcef5809b74116dae52cd04aabec4352043c536cb82b72ce->enter($__internal_b1ef4b5f7f074470dcef5809b74116dae52cd04aabec4352043c536cb82b72ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_b1ef4b5f7f074470dcef5809b74116dae52cd04aabec4352043c536cb82b72ce->leave($__internal_b1ef4b5f7f074470dcef5809b74116dae52cd04aabec4352043c536cb82b72ce_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_0964777ad57f25803416d36644c6504b8f77630b24d30cad92354f7854a5509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0964777ad57f25803416d36644c6504b8f77630b24d30cad92354f7854a5509d->enter($__internal_0964777ad57f25803416d36644c6504b8f77630b24d30cad92354f7854a5509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0964777ad57f25803416d36644c6504b8f77630b24d30cad92354f7854a5509d->leave($__internal_0964777ad57f25803416d36644c6504b8f77630b24d30cad92354f7854a5509d_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_10876f2710ff6f55f1e5d1a4ee01c6ad14179eb997d9a1270723343cd6d5d66e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10876f2710ff6f55f1e5d1a4ee01c6ad14179eb997d9a1270723343cd6d5d66e->enter($__internal_10876f2710ff6f55f1e5d1a4ee01c6ad14179eb997d9a1270723343cd6d5d66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_10876f2710ff6f55f1e5d1a4ee01c6ad14179eb997d9a1270723343cd6d5d66e->leave($__internal_10876f2710ff6f55f1e5d1a4ee01c6ad14179eb997d9a1270723343cd6d5d66e_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ff923a44cd001cddbd49a3dda784e50bab31e9489f770a7fe855b879d782621c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff923a44cd001cddbd49a3dda784e50bab31e9489f770a7fe855b879d782621c->enter($__internal_ff923a44cd001cddbd49a3dda784e50bab31e9489f770a7fe855b879d782621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 256
            if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
                // line 257
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            }
            // line 259
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 260
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
                // line 263
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 264
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 265
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 266
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? $this->getContext($context, "label_attr"))) {
                $__internal_2aa3cf099d2b3134c8073cfdb38c904282ce33e18d1a03675fd3fe1b0511b7ae = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_2aa3cf099d2b3134c8073cfdb38c904282ce33e18d1a03675fd3fe1b0511b7ae)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_2aa3cf099d2b3134c8073cfdb38c904282ce33e18d1a03675fd3fe1b0511b7ae);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_ff923a44cd001cddbd49a3dda784e50bab31e9489f770a7fe855b879d782621c->leave($__internal_ff923a44cd001cddbd49a3dda784e50bab31e9489f770a7fe855b879d782621c_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_487ebf3c46ed47a7b689bc2db47879e9e8076ead53d5345cb6096d3784fd5757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487ebf3c46ed47a7b689bc2db47879e9e8076ead53d5345cb6096d3784fd5757->enter($__internal_487ebf3c46ed47a7b689bc2db47879e9e8076ead53d5345cb6096d3784fd5757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_487ebf3c46ed47a7b689bc2db47879e9e8076ead53d5345cb6096d3784fd5757->leave($__internal_487ebf3c46ed47a7b689bc2db47879e9e8076ead53d5345cb6096d3784fd5757_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_caf0ae078205df8df4a1559bf4f0164b4cc2be25c2ba2b5b69aab8eb869376de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf0ae078205df8df4a1559bf4f0164b4cc2be25c2ba2b5b69aab8eb869376de->enter($__internal_caf0ae078205df8df4a1559bf4f0164b4cc2be25c2ba2b5b69aab8eb869376de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_caf0ae078205df8df4a1559bf4f0164b4cc2be25c2ba2b5b69aab8eb869376de->leave($__internal_caf0ae078205df8df4a1559bf4f0164b4cc2be25c2ba2b5b69aab8eb869376de_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_de3899956e69ae58b5944716aec062e64d45bf6d707007d97baa1fc553318353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3899956e69ae58b5944716aec062e64d45bf6d707007d97baa1fc553318353->enter($__internal_de3899956e69ae58b5944716aec062e64d45bf6d707007d97baa1fc553318353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_de3899956e69ae58b5944716aec062e64d45bf6d707007d97baa1fc553318353->leave($__internal_de3899956e69ae58b5944716aec062e64d45bf6d707007d97baa1fc553318353_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_324f5966f92d5403d2f933db9b4bcacf72d7a92675326754c65ef481530aca02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324f5966f92d5403d2f933db9b4bcacf72d7a92675326754c65ef481530aca02->enter($__internal_324f5966f92d5403d2f933db9b4bcacf72d7a92675326754c65ef481530aca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_324f5966f92d5403d2f933db9b4bcacf72d7a92675326754c65ef481530aca02->leave($__internal_324f5966f92d5403d2f933db9b4bcacf72d7a92675326754c65ef481530aca02_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b6768a1a10a989b3f69bba20fae907e21f9019594fc8b815c4b4e41be3432b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6768a1a10a989b3f69bba20fae907e21f9019594fc8b815c4b4e41be3432b01->enter($__internal_b6768a1a10a989b3f69bba20fae907e21f9019594fc8b815c4b4e41be3432b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_b6768a1a10a989b3f69bba20fae907e21f9019594fc8b815c4b4e41be3432b01->leave($__internal_b6768a1a10a989b3f69bba20fae907e21f9019594fc8b815c4b4e41be3432b01_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_caf8bce011c49eadb3a3b09485188102c9931e69823f4f57c54f7113e175669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf8bce011c49eadb3a3b09485188102c9931e69823f4f57c54f7113e175669b->enter($__internal_caf8bce011c49eadb3a3b09485188102c9931e69823f4f57c54f7113e175669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_caf8bce011c49eadb3a3b09485188102c9931e69823f4f57c54f7113e175669b->leave($__internal_caf8bce011c49eadb3a3b09485188102c9931e69823f4f57c54f7113e175669b_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7b723ad041c7c0dd4aefe639467a817c73ab9b74f7fa76941c29abcf2f523f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b723ad041c7c0dd4aefe639467a817c73ab9b74f7fa76941c29abcf2f523f67->enter($__internal_7b723ad041c7c0dd4aefe639467a817c73ab9b74f7fa76941c29abcf2f523f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
        // line 317
        if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_7b723ad041c7c0dd4aefe639467a817c73ab9b74f7fa76941c29abcf2f523f67->leave($__internal_7b723ad041c7c0dd4aefe639467a817c73ab9b74f7fa76941c29abcf2f523f67_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_6ed94e981f1a96ba521959b9f13aa473bc824ef8ab7bb740bbfc67f51cfa3f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed94e981f1a96ba521959b9f13aa473bc824ef8ab7bb740bbfc67f51cfa3f79->enter($__internal_6ed94e981f1a96ba521959b9f13aa473bc824ef8ab7bb740bbfc67f51cfa3f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_6ed94e981f1a96ba521959b9f13aa473bc824ef8ab7bb740bbfc67f51cfa3f79->leave($__internal_6ed94e981f1a96ba521959b9f13aa473bc824ef8ab7bb740bbfc67f51cfa3f79_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_fa0bb91ec0a168b8211726aa8669de22d1c0ee9eba95128e859a36fb8af5094d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0bb91ec0a168b8211726aa8669de22d1c0ee9eba95128e859a36fb8af5094d->enter($__internal_fa0bb91ec0a168b8211726aa8669de22d1c0ee9eba95128e859a36fb8af5094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_fa0bb91ec0a168b8211726aa8669de22d1c0ee9eba95128e859a36fb8af5094d->leave($__internal_fa0bb91ec0a168b8211726aa8669de22d1c0ee9eba95128e859a36fb8af5094d_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_4e0f7d5ef25c22d58f01aeb3b162e9570b0fc705a819859b99cbdc209dbd16a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0f7d5ef25c22d58f01aeb3b162e9570b0fc705a819859b99cbdc209dbd16a3->enter($__internal_4e0f7d5ef25c22d58f01aeb3b162e9570b0fc705a819859b99cbdc209dbd16a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !$this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))))) {
            // line 353
            $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")));
            // line 355
            if (twig_in_filter(($context["method"] ?? $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = ($context["method"] ?? $this->getContext($context, "method"));
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if ((($context["form_method"] ?? $this->getContext($context, "form_method")) != ($context["method"] ?? $this->getContext($context, "method")))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? $this->getContext($context, "method")), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_4e0f7d5ef25c22d58f01aeb3b162e9570b0fc705a819859b99cbdc209dbd16a3->leave($__internal_4e0f7d5ef25c22d58f01aeb3b162e9570b0fc705a819859b99cbdc209dbd16a3_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_1a46cb8c2dc488b7a7a148a846370051792b54cf8d943829f0250ac74056e97a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a46cb8c2dc488b7a7a148a846370051792b54cf8d943829f0250ac74056e97a->enter($__internal_1a46cb8c2dc488b7a7a148a846370051792b54cf8d943829f0250ac74056e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1a46cb8c2dc488b7a7a148a846370051792b54cf8d943829f0250ac74056e97a->leave($__internal_1a46cb8c2dc488b7a7a148a846370051792b54cf8d943829f0250ac74056e97a_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_6d17669b9b8858e3f86417cabfd18d3c5d77648dbd61da31cc6a923f95c3207d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d17669b9b8858e3f86417cabfd18d3c5d77648dbd61da31cc6a923f95c3207d->enter($__internal_6d17669b9b8858e3f86417cabfd18d3c5d77648dbd61da31cc6a923f95c3207d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 377
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_6d17669b9b8858e3f86417cabfd18d3c5d77648dbd61da31cc6a923f95c3207d->leave($__internal_6d17669b9b8858e3f86417cabfd18d3c5d77648dbd61da31cc6a923f95c3207d_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_696a7e48988751f339cc408e92d94401d14c462fc97090f07f2be40aed6a2bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696a7e48988751f339cc408e92d94401d14c462fc97090f07f2be40aed6a2bf0->enter($__internal_696a7e48988751f339cc408e92d94401d14c462fc97090f07f2be40aed6a2bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_696a7e48988751f339cc408e92d94401d14c462fc97090f07f2be40aed6a2bf0->leave($__internal_696a7e48988751f339cc408e92d94401d14c462fc97090f07f2be40aed6a2bf0_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_c78f3310b1bbf37d4d3b9be70581ff7dc942dd6d7b6a00c8bbd225ae9a23f121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78f3310b1bbf37d4d3b9be70581ff7dc942dd6d7b6a00c8bbd225ae9a23f121->enter($__internal_c78f3310b1bbf37d4d3b9be70581ff7dc942dd6d7b6a00c8bbd225ae9a23f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_c78f3310b1bbf37d4d3b9be70581ff7dc942dd6d7b6a00c8bbd225ae9a23f121->leave($__internal_c78f3310b1bbf37d4d3b9be70581ff7dc942dd6d7b6a00c8bbd225ae9a23f121_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_f3a3c45ecf212f06ce91055033a4650ddac531b25f911de4ae67b878f04a6cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a3c45ecf212f06ce91055033a4650ddac531b25f911de4ae67b878f04a6cbd->enter($__internal_f3a3c45ecf212f06ce91055033a4650ddac531b25f911de4ae67b878f04a6cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f3a3c45ecf212f06ce91055033a4650ddac531b25f911de4ae67b878f04a6cbd->leave($__internal_f3a3c45ecf212f06ce91055033a4650ddac531b25f911de4ae67b878f04a6cbd_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1375 => 400,  1373 => 399,  1368 => 398,  1366 => 397,  1361 => 396,  1359 => 395,  1357 => 394,  1353 => 393,  1347 => 392,  1340 => 389,  1331 => 388,  1325 => 387,  1318 => 384,  1312 => 383,  1306 => 382,  1299 => 379,  1295 => 378,  1291 => 377,  1285 => 376,  1279 => 375,  1268 => 371,  1264 => 370,  1258 => 369,  1247 => 362,  1245 => 361,  1242 => 358,  1239 => 356,  1237 => 355,  1235 => 354,  1233 => 353,  1231 => 352,  1224 => 348,  1222 => 347,  1218 => 346,  1212 => 345,  1204 => 341,  1196 => 339,  1192 => 338,  1190 => 337,  1188 => 336,  1182 => 335,  1175 => 332,  1172 => 330,  1170 => 329,  1164 => 328,  1154 => 324,  1152 => 323,  1125 => 322,  1122 => 320,  1119 => 318,  1117 => 317,  1115 => 316,  1113 => 315,  1107 => 314,  1100 => 311,  1098 => 310,  1096 => 309,  1090 => 308,  1083 => 303,  1077 => 302,  1070 => 299,  1068 => 298,  1066 => 297,  1060 => 296,  1053 => 293,  1051 => 292,  1049 => 291,  1047 => 290,  1045 => 289,  1039 => 288,  1032 => 285,  1026 => 280,  1015 => 276,  991 => 272,  987 => 269,  984 => 266,  983 => 265,  982 => 264,  980 => 263,  978 => 262,  975 => 260,  973 => 259,  970 => 257,  968 => 256,  966 => 255,  960 => 254,  953 => 249,  951 => 248,  945 => 247,  938 => 244,  936 => 243,  930 => 242,  923 => 239,  921 => 238,  915 => 237,  908 => 234,  906 => 233,  900 => 232,  887 => 229,  883 => 226,  880 => 223,  879 => 222,  878 => 221,  876 => 220,  874 => 219,  868 => 218,  861 => 215,  859 => 214,  853 => 213,  846 => 210,  844 => 209,  838 => 208,  831 => 205,  829 => 204,  823 => 203,  816 => 200,  814 => 199,  808 => 198,  800 => 195,  798 => 194,  792 => 193,  785 => 190,  783 => 189,  777 => 188,  770 => 185,  768 => 184,  762 => 183,  755 => 180,  749 => 179,  742 => 176,  740 => 175,  734 => 174,  727 => 171,  725 => 170,  719 => 168,  711 => 164,  707 => 163,  703 => 160,  697 => 159,  691 => 158,  685 => 157,  679 => 156,  673 => 155,  667 => 154,  661 => 153,  656 => 149,  650 => 148,  644 => 147,  638 => 146,  632 => 145,  626 => 144,  620 => 143,  614 => 142,  608 => 139,  606 => 138,  602 => 137,  599 => 135,  597 => 134,  591 => 133,  583 => 129,  573 => 128,  568 => 127,  566 => 126,  563 => 124,  561 => 123,  555 => 122,  547 => 118,  545 => 116,  544 => 115,  543 => 114,  542 => 113,  538 => 112,  535 => 110,  533 => 109,  527 => 108,  519 => 104,  517 => 103,  515 => 102,  513 => 101,  511 => 100,  507 => 99,  504 => 97,  502 => 96,  496 => 95,  479 => 92,  473 => 91,  456 => 88,  450 => 87,  412 => 82,  409 => 80,  407 => 79,  405 => 78,  400 => 77,  398 => 76,  381 => 75,  375 => 74,  368 => 71,  366 => 70,  364 => 69,  358 => 66,  356 => 65,  354 => 64,  352 => 63,  350 => 62,  341 => 60,  339 => 59,  332 => 58,  329 => 56,  327 => 55,  321 => 54,  314 => 51,  308 => 49,  306 => 48,  302 => 47,  298 => 46,  292 => 45,  284 => 41,  281 => 39,  279 => 38,  273 => 37,  262 => 34,  256 => 33,  249 => 30,  246 => 28,  244 => 27,  238 => 26,  231 => 23,  229 => 22,  227 => 21,  224 => 19,  222 => 18,  218 => 17,  212 => 16,  195 => 13,  193 => 12,  187 => 11,  179 => 7,  176 => 5,  174 => 4,  168 => 3,  161 => 392,  159 => 387,  157 => 382,  155 => 375,  153 => 369,  150 => 366,  148 => 345,  146 => 335,  144 => 328,  142 => 314,  140 => 308,  138 => 302,  136 => 296,  134 => 288,  132 => 280,  130 => 276,  128 => 254,  126 => 247,  124 => 242,  122 => 237,  120 => 232,  118 => 218,  116 => 213,  114 => 208,  112 => 203,  110 => 198,  108 => 193,  106 => 188,  104 => 183,  102 => 179,  100 => 174,  98 => 168,  96 => 133,  94 => 122,  92 => 108,  90 => 95,  88 => 91,  86 => 87,  84 => 74,  82 => 54,  80 => 45,  78 => 37,  76 => 33,  74 => 26,  72 => 16,  70 => 11,  68 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/var/www/html/shikoba/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
