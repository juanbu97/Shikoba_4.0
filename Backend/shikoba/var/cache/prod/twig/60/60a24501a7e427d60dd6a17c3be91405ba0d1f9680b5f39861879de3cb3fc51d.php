<?php

/* form_div_layout.html.twig */
class __TwigTemplate_231ad3b328da492725efef619c1ec28c339f0f87c36905585fd6ee87b231726c extends Twig_Template
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
        $__internal_0763dadcb4af5eeac699218120f053aa7696bb3a3132db5c83878c6248b08cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0763dadcb4af5eeac699218120f053aa7696bb3a3132db5c83878c6248b08cc8->enter($__internal_0763dadcb4af5eeac699218120f053aa7696bb3a3132db5c83878c6248b08cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_0763dadcb4af5eeac699218120f053aa7696bb3a3132db5c83878c6248b08cc8->leave($__internal_0763dadcb4af5eeac699218120f053aa7696bb3a3132db5c83878c6248b08cc8_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_189594d92f71cefad8c3c32c0ca66ab4f5b8d8d74c5fa8ea631204df3bff8458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189594d92f71cefad8c3c32c0ca66ab4f5b8d8d74c5fa8ea631204df3bff8458->enter($__internal_189594d92f71cefad8c3c32c0ca66ab4f5b8d8d74c5fa8ea631204df3bff8458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_189594d92f71cefad8c3c32c0ca66ab4f5b8d8d74c5fa8ea631204df3bff8458->leave($__internal_189594d92f71cefad8c3c32c0ca66ab4f5b8d8d74c5fa8ea631204df3bff8458_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_65eba85f83d5de02156bc70778b67f9de058c0ad228fd57132a75440873b93c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eba85f83d5de02156bc70778b67f9de058c0ad228fd57132a75440873b93c6->enter($__internal_65eba85f83d5de02156bc70778b67f9de058c0ad228fd57132a75440873b93c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_65eba85f83d5de02156bc70778b67f9de058c0ad228fd57132a75440873b93c6->leave($__internal_65eba85f83d5de02156bc70778b67f9de058c0ad228fd57132a75440873b93c6_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_f98b522a05c53340dc04452c35f943682bdf0d151d855b69d2af8708cc4e5140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f98b522a05c53340dc04452c35f943682bdf0d151d855b69d2af8708cc4e5140->enter($__internal_f98b522a05c53340dc04452c35f943682bdf0d151d855b69d2af8708cc4e5140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_f98b522a05c53340dc04452c35f943682bdf0d151d855b69d2af8708cc4e5140->leave($__internal_f98b522a05c53340dc04452c35f943682bdf0d151d855b69d2af8708cc4e5140_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_972154646a7ad81eeff7a244e9590a6abaa1eab0e235f96c634172f7eac20b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972154646a7ad81eeff7a244e9590a6abaa1eab0e235f96c634172f7eac20b8c->enter($__internal_972154646a7ad81eeff7a244e9590a6abaa1eab0e235f96c634172f7eac20b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_972154646a7ad81eeff7a244e9590a6abaa1eab0e235f96c634172f7eac20b8c->leave($__internal_972154646a7ad81eeff7a244e9590a6abaa1eab0e235f96c634172f7eac20b8c_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_4ad4db6f175d44f7e7683700c4f677d49e36e5dc109d2948fbd0d65d1947e09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad4db6f175d44f7e7683700c4f677d49e36e5dc109d2948fbd0d65d1947e09c->enter($__internal_4ad4db6f175d44f7e7683700c4f677d49e36e5dc109d2948fbd0d65d1947e09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_4ad4db6f175d44f7e7683700c4f677d49e36e5dc109d2948fbd0d65d1947e09c->leave($__internal_4ad4db6f175d44f7e7683700c4f677d49e36e5dc109d2948fbd0d65d1947e09c_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_db3b113c5d2ab4b9a04f606c193f0ba477bcf1019472a037c64cd5a90b07d984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3b113c5d2ab4b9a04f606c193f0ba477bcf1019472a037c64cd5a90b07d984->enter($__internal_db3b113c5d2ab4b9a04f606c193f0ba477bcf1019472a037c64cd5a90b07d984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if (($context["expanded"] ?? $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_db3b113c5d2ab4b9a04f606c193f0ba477bcf1019472a037c64cd5a90b07d984->leave($__internal_db3b113c5d2ab4b9a04f606c193f0ba477bcf1019472a037c64cd5a90b07d984_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_48fbadc964a43b668df0fdb24314aa49140be5fc94bcefbb970d25abdc059b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fbadc964a43b668df0fdb24314aa49140be5fc94bcefbb970d25abdc059b77->enter($__internal_48fbadc964a43b668df0fdb24314aa49140be5fc94bcefbb970d25abdc059b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_48fbadc964a43b668df0fdb24314aa49140be5fc94bcefbb970d25abdc059b77->leave($__internal_48fbadc964a43b668df0fdb24314aa49140be5fc94bcefbb970d25abdc059b77_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_657a4762de7fef6a66788756d509f9ab87eecc95b09516c9fb4bd9c7e58d4400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657a4762de7fef6a66788756d509f9ab87eecc95b09516c9fb4bd9c7e58d4400->enter($__internal_657a4762de7fef6a66788756d509f9ab87eecc95b09516c9fb4bd9c7e58d4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_657a4762de7fef6a66788756d509f9ab87eecc95b09516c9fb4bd9c7e58d4400->leave($__internal_657a4762de7fef6a66788756d509f9ab87eecc95b09516c9fb4bd9c7e58d4400_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_a160afd9e462272586ffeda95981d347be94153b36f9eff710ec75f02b3fadab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a160afd9e462272586ffeda95981d347be94153b36f9eff710ec75f02b3fadab->enter($__internal_a160afd9e462272586ffeda95981d347be94153b36f9eff710ec75f02b3fadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_7553752206a5e0dc6ddb52b76ab499ec8236cce2eef49d3b9b5db33738f957a4 = array("attr" => $this->getAttribute($context["choice"], "attr", array()));
                    if (!is_array($__internal_7553752206a5e0dc6ddb52b76ab499ec8236cce2eef49d3b9b5db33738f957a4)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_7553752206a5e0dc6ddb52b76ab499ec8236cce2eef49d3b9b5db33738f957a4);
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
        
        $__internal_a160afd9e462272586ffeda95981d347be94153b36f9eff710ec75f02b3fadab->leave($__internal_a160afd9e462272586ffeda95981d347be94153b36f9eff710ec75f02b3fadab_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b8b347b0be11b744f781f5f33f9794e7065c1efcb633dc463b01fac53503dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b347b0be11b744f781f5f33f9794e7065c1efcb633dc463b01fac53503dada->enter($__internal_b8b347b0be11b744f781f5f33f9794e7065c1efcb633dc463b01fac53503dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b8b347b0be11b744f781f5f33f9794e7065c1efcb633dc463b01fac53503dada->leave($__internal_b8b347b0be11b744f781f5f33f9794e7065c1efcb633dc463b01fac53503dada_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7080b252b1e2485988a4aafcd7471b3cd2435e0dd40a854d78939d750dc63c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7080b252b1e2485988a4aafcd7471b3cd2435e0dd40a854d78939d750dc63c29->enter($__internal_7080b252b1e2485988a4aafcd7471b3cd2435e0dd40a854d78939d750dc63c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_7080b252b1e2485988a4aafcd7471b3cd2435e0dd40a854d78939d750dc63c29->leave($__internal_7080b252b1e2485988a4aafcd7471b3cd2435e0dd40a854d78939d750dc63c29_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_84434d8d5986bd721c720eae7e5acd94729f2692ce50ae6c034d4d69195e16ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84434d8d5986bd721c720eae7e5acd94729f2692ce50ae6c034d4d69195e16ec->enter($__internal_84434d8d5986bd721c720eae7e5acd94729f2692ce50ae6c034d4d69195e16ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_84434d8d5986bd721c720eae7e5acd94729f2692ce50ae6c034d4d69195e16ec->leave($__internal_84434d8d5986bd721c720eae7e5acd94729f2692ce50ae6c034d4d69195e16ec_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_16b52f58e03b512c1b094e63e98cc446b7fdda0830f3960872e8ae387cddf323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b52f58e03b512c1b094e63e98cc446b7fdda0830f3960872e8ae387cddf323->enter($__internal_16b52f58e03b512c1b094e63e98cc446b7fdda0830f3960872e8ae387cddf323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_16b52f58e03b512c1b094e63e98cc446b7fdda0830f3960872e8ae387cddf323->leave($__internal_16b52f58e03b512c1b094e63e98cc446b7fdda0830f3960872e8ae387cddf323_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9140fb6869daff0f564104fb31570b2f17505a85c74ed5aa0803ff17550a4273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9140fb6869daff0f564104fb31570b2f17505a85c74ed5aa0803ff17550a4273->enter($__internal_9140fb6869daff0f564104fb31570b2f17505a85c74ed5aa0803ff17550a4273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_9140fb6869daff0f564104fb31570b2f17505a85c74ed5aa0803ff17550a4273->leave($__internal_9140fb6869daff0f564104fb31570b2f17505a85c74ed5aa0803ff17550a4273_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_893596dbd19f9140cae2d0a205695f0a1a5c159af7999b7fd990719cb735c10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893596dbd19f9140cae2d0a205695f0a1a5c159af7999b7fd990719cb735c10f->enter($__internal_893596dbd19f9140cae2d0a205695f0a1a5c159af7999b7fd990719cb735c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_893596dbd19f9140cae2d0a205695f0a1a5c159af7999b7fd990719cb735c10f->leave($__internal_893596dbd19f9140cae2d0a205695f0a1a5c159af7999b7fd990719cb735c10f_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_e0d0afcf3746f7eb659b169c67d9f8f65be8cfcceef5095f536dba131b8b5184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d0afcf3746f7eb659b169c67d9f8f65be8cfcceef5095f536dba131b8b5184->enter($__internal_e0d0afcf3746f7eb659b169c67d9f8f65be8cfcceef5095f536dba131b8b5184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e0d0afcf3746f7eb659b169c67d9f8f65be8cfcceef5095f536dba131b8b5184->leave($__internal_e0d0afcf3746f7eb659b169c67d9f8f65be8cfcceef5095f536dba131b8b5184_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_f91ef363444c70826fbda83f2b065cd6fe2dd872265031a619c190a0550de882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91ef363444c70826fbda83f2b065cd6fe2dd872265031a619c190a0550de882->enter($__internal_f91ef363444c70826fbda83f2b065cd6fe2dd872265031a619c190a0550de882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f91ef363444c70826fbda83f2b065cd6fe2dd872265031a619c190a0550de882->leave($__internal_f91ef363444c70826fbda83f2b065cd6fe2dd872265031a619c190a0550de882_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6daf303c301200ba2b41ee00712a3e3acc5e2a83c46e9a89ae6a9adabe24aff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daf303c301200ba2b41ee00712a3e3acc5e2a83c46e9a89ae6a9adabe24aff4->enter($__internal_6daf303c301200ba2b41ee00712a3e3acc5e2a83c46e9a89ae6a9adabe24aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_6daf303c301200ba2b41ee00712a3e3acc5e2a83c46e9a89ae6a9adabe24aff4->leave($__internal_6daf303c301200ba2b41ee00712a3e3acc5e2a83c46e9a89ae6a9adabe24aff4_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_1b5368a3031ad23d4dc8e5051b5b53fd85f7359d9b4f596c2d8931e1c0bcfffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5368a3031ad23d4dc8e5051b5b53fd85f7359d9b4f596c2d8931e1c0bcfffb->enter($__internal_1b5368a3031ad23d4dc8e5051b5b53fd85f7359d9b4f596c2d8931e1c0bcfffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1b5368a3031ad23d4dc8e5051b5b53fd85f7359d9b4f596c2d8931e1c0bcfffb->leave($__internal_1b5368a3031ad23d4dc8e5051b5b53fd85f7359d9b4f596c2d8931e1c0bcfffb_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_fa91104b5588955436847d390d0f41f6049ab96365236842508b804f45bbf3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa91104b5588955436847d390d0f41f6049ab96365236842508b804f45bbf3d6->enter($__internal_fa91104b5588955436847d390d0f41f6049ab96365236842508b804f45bbf3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fa91104b5588955436847d390d0f41f6049ab96365236842508b804f45bbf3d6->leave($__internal_fa91104b5588955436847d390d0f41f6049ab96365236842508b804f45bbf3d6_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e9cb08e0226097ec339faa85c2c574541ac490bd34611fca65bde2e77b91d8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cb08e0226097ec339faa85c2c574541ac490bd34611fca65bde2e77b91d8d9->enter($__internal_e9cb08e0226097ec339faa85c2c574541ac490bd34611fca65bde2e77b91d8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_e9cb08e0226097ec339faa85c2c574541ac490bd34611fca65bde2e77b91d8d9->leave($__internal_e9cb08e0226097ec339faa85c2c574541ac490bd34611fca65bde2e77b91d8d9_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_b3d03aba7f0455a5b28a6114198d39801a7e73f00e756a08aa6ee5648ec8e9df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d03aba7f0455a5b28a6114198d39801a7e73f00e756a08aa6ee5648ec8e9df->enter($__internal_b3d03aba7f0455a5b28a6114198d39801a7e73f00e756a08aa6ee5648ec8e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b3d03aba7f0455a5b28a6114198d39801a7e73f00e756a08aa6ee5648ec8e9df->leave($__internal_b3d03aba7f0455a5b28a6114198d39801a7e73f00e756a08aa6ee5648ec8e9df_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_a29258351a9e3731b71ade50a0b6e7cea4287d9224ad9f63590fb488bda3d2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29258351a9e3731b71ade50a0b6e7cea4287d9224ad9f63590fb488bda3d2d9->enter($__internal_a29258351a9e3731b71ade50a0b6e7cea4287d9224ad9f63590fb488bda3d2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a29258351a9e3731b71ade50a0b6e7cea4287d9224ad9f63590fb488bda3d2d9->leave($__internal_a29258351a9e3731b71ade50a0b6e7cea4287d9224ad9f63590fb488bda3d2d9_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_bf2fc96d907eb4137e4fd8c043584de994a6c31d336532b38a4c71a8a229aa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2fc96d907eb4137e4fd8c043584de994a6c31d336532b38a4c71a8a229aa15->enter($__internal_bf2fc96d907eb4137e4fd8c043584de994a6c31d336532b38a4c71a8a229aa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf2fc96d907eb4137e4fd8c043584de994a6c31d336532b38a4c71a8a229aa15->leave($__internal_bf2fc96d907eb4137e4fd8c043584de994a6c31d336532b38a4c71a8a229aa15_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_d1b1eb4f76e43356b958e92ebeb1d1fb8d5f019502e612e37efdee6363e41b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b1eb4f76e43356b958e92ebeb1d1fb8d5f019502e612e37efdee6363e41b80->enter($__internal_d1b1eb4f76e43356b958e92ebeb1d1fb8d5f019502e612e37efdee6363e41b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d1b1eb4f76e43356b958e92ebeb1d1fb8d5f019502e612e37efdee6363e41b80->leave($__internal_d1b1eb4f76e43356b958e92ebeb1d1fb8d5f019502e612e37efdee6363e41b80_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e1d289a3d9ae8c660df912e2b5cb76982c3c9d7776176f42dbde57a5c429b081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d289a3d9ae8c660df912e2b5cb76982c3c9d7776176f42dbde57a5c429b081->enter($__internal_e1d289a3d9ae8c660df912e2b5cb76982c3c9d7776176f42dbde57a5c429b081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_e1d289a3d9ae8c660df912e2b5cb76982c3c9d7776176f42dbde57a5c429b081->leave($__internal_e1d289a3d9ae8c660df912e2b5cb76982c3c9d7776176f42dbde57a5c429b081_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_f0ece2be5c454ac39388e18bf90e69d1b9af0a88dd8f28ab28e7aec507fcbe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ece2be5c454ac39388e18bf90e69d1b9af0a88dd8f28ab28e7aec507fcbe4a->enter($__internal_f0ece2be5c454ac39388e18bf90e69d1b9af0a88dd8f28ab28e7aec507fcbe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f0ece2be5c454ac39388e18bf90e69d1b9af0a88dd8f28ab28e7aec507fcbe4a->leave($__internal_f0ece2be5c454ac39388e18bf90e69d1b9af0a88dd8f28ab28e7aec507fcbe4a_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_b93f3e6466658d5c1cf116a20ded1a1389146301acbb893f522bea8ba17eac12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93f3e6466658d5c1cf116a20ded1a1389146301acbb893f522bea8ba17eac12->enter($__internal_b93f3e6466658d5c1cf116a20ded1a1389146301acbb893f522bea8ba17eac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_b93f3e6466658d5c1cf116a20ded1a1389146301acbb893f522bea8ba17eac12->leave($__internal_b93f3e6466658d5c1cf116a20ded1a1389146301acbb893f522bea8ba17eac12_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_749f0ab9830cb1103f3e4f5480a97e1a0b2c393040b52e6a81fb6f7ea7d735c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749f0ab9830cb1103f3e4f5480a97e1a0b2c393040b52e6a81fb6f7ea7d735c8->enter($__internal_749f0ab9830cb1103f3e4f5480a97e1a0b2c393040b52e6a81fb6f7ea7d735c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_749f0ab9830cb1103f3e4f5480a97e1a0b2c393040b52e6a81fb6f7ea7d735c8->leave($__internal_749f0ab9830cb1103f3e4f5480a97e1a0b2c393040b52e6a81fb6f7ea7d735c8_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_f95fdb058f611fc42161fd004d0c35c0e392eec764298c4d804c101c6fa9a062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95fdb058f611fc42161fd004d0c35c0e392eec764298c4d804c101c6fa9a062->enter($__internal_f95fdb058f611fc42161fd004d0c35c0e392eec764298c4d804c101c6fa9a062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f95fdb058f611fc42161fd004d0c35c0e392eec764298c4d804c101c6fa9a062->leave($__internal_f95fdb058f611fc42161fd004d0c35c0e392eec764298c4d804c101c6fa9a062_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eedf19fe9b8e1d888cb1dfb4e24a55223c91ca9b28fe9cf9ad74f624c1a99548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedf19fe9b8e1d888cb1dfb4e24a55223c91ca9b28fe9cf9ad74f624c1a99548->enter($__internal_eedf19fe9b8e1d888cb1dfb4e24a55223c91ca9b28fe9cf9ad74f624c1a99548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_b4681d63b3442a6158198edd7c3615ca8214fb0814ec81e764b70027badb6e76 = array("attr" => ($context["label_attr"] ?? $this->getContext($context, "label_attr")));
                if (!is_array($__internal_b4681d63b3442a6158198edd7c3615ca8214fb0814ec81e764b70027badb6e76)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_b4681d63b3442a6158198edd7c3615ca8214fb0814ec81e764b70027badb6e76);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_eedf19fe9b8e1d888cb1dfb4e24a55223c91ca9b28fe9cf9ad74f624c1a99548->leave($__internal_eedf19fe9b8e1d888cb1dfb4e24a55223c91ca9b28fe9cf9ad74f624c1a99548_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_fc84ae5914e676a2127380f14f52c744e81c7f379b693900088ad1e12c6959d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc84ae5914e676a2127380f14f52c744e81c7f379b693900088ad1e12c6959d4->enter($__internal_fc84ae5914e676a2127380f14f52c744e81c7f379b693900088ad1e12c6959d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_fc84ae5914e676a2127380f14f52c744e81c7f379b693900088ad1e12c6959d4->leave($__internal_fc84ae5914e676a2127380f14f52c744e81c7f379b693900088ad1e12c6959d4_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_02aec6260075357c9092579bc55a52c5c74546751ff77a9f9e2528aea62666a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aec6260075357c9092579bc55a52c5c74546751ff77a9f9e2528aea62666a1->enter($__internal_02aec6260075357c9092579bc55a52c5c74546751ff77a9f9e2528aea62666a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_02aec6260075357c9092579bc55a52c5c74546751ff77a9f9e2528aea62666a1->leave($__internal_02aec6260075357c9092579bc55a52c5c74546751ff77a9f9e2528aea62666a1_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aaad811643553d00ea8fe7eb8123c3914c8ab459cbad4d3205c508b863aa4bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaad811643553d00ea8fe7eb8123c3914c8ab459cbad4d3205c508b863aa4bfe->enter($__internal_aaad811643553d00ea8fe7eb8123c3914c8ab459cbad4d3205c508b863aa4bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_aaad811643553d00ea8fe7eb8123c3914c8ab459cbad4d3205c508b863aa4bfe->leave($__internal_aaad811643553d00ea8fe7eb8123c3914c8ab459cbad4d3205c508b863aa4bfe_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_16833b1ad12e584cd405833938d949879f028e1f6fa153faab218b24c73f9f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16833b1ad12e584cd405833938d949879f028e1f6fa153faab218b24c73f9f53->enter($__internal_16833b1ad12e584cd405833938d949879f028e1f6fa153faab218b24c73f9f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_16833b1ad12e584cd405833938d949879f028e1f6fa153faab218b24c73f9f53->leave($__internal_16833b1ad12e584cd405833938d949879f028e1f6fa153faab218b24c73f9f53_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_6badc128eaa489dea01d5f2000f4b668419213f7de9a4b875388c1f6083c26eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6badc128eaa489dea01d5f2000f4b668419213f7de9a4b875388c1f6083c26eb->enter($__internal_6badc128eaa489dea01d5f2000f4b668419213f7de9a4b875388c1f6083c26eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_6badc128eaa489dea01d5f2000f4b668419213f7de9a4b875388c1f6083c26eb->leave($__internal_6badc128eaa489dea01d5f2000f4b668419213f7de9a4b875388c1f6083c26eb_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_3ace6fff0a227bb153fba3fd15525cde82ca1e210140910e6455e58dd9489e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ace6fff0a227bb153fba3fd15525cde82ca1e210140910e6455e58dd9489e5d->enter($__internal_3ace6fff0a227bb153fba3fd15525cde82ca1e210140910e6455e58dd9489e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_3ace6fff0a227bb153fba3fd15525cde82ca1e210140910e6455e58dd9489e5d->leave($__internal_3ace6fff0a227bb153fba3fd15525cde82ca1e210140910e6455e58dd9489e5d_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_da67147e2752f1fa547bbcdf3dd6f3ef3c399d2faa375208a77ed99a26f15078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da67147e2752f1fa547bbcdf3dd6f3ef3c399d2faa375208a77ed99a26f15078->enter($__internal_da67147e2752f1fa547bbcdf3dd6f3ef3c399d2faa375208a77ed99a26f15078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_da67147e2752f1fa547bbcdf3dd6f3ef3c399d2faa375208a77ed99a26f15078->leave($__internal_da67147e2752f1fa547bbcdf3dd6f3ef3c399d2faa375208a77ed99a26f15078_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b423bd093c241981bc6990a06c6b3ae0cbbb9bd6005b23c192f997974f3102ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b423bd093c241981bc6990a06c6b3ae0cbbb9bd6005b23c192f997974f3102ca->enter($__internal_b423bd093c241981bc6990a06c6b3ae0cbbb9bd6005b23c192f997974f3102ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? $this->getContext($context, "render_rest")))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_b423bd093c241981bc6990a06c6b3ae0cbbb9bd6005b23c192f997974f3102ca->leave($__internal_b423bd093c241981bc6990a06c6b3ae0cbbb9bd6005b23c192f997974f3102ca_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2e71b5a1ec04ff6050bd53002ec7d05d4697df4d0bf0b264a4ce585722b72d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e71b5a1ec04ff6050bd53002ec7d05d4697df4d0bf0b264a4ce585722b72d13->enter($__internal_2e71b5a1ec04ff6050bd53002ec7d05d4697df4d0bf0b264a4ce585722b72d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2e71b5a1ec04ff6050bd53002ec7d05d4697df4d0bf0b264a4ce585722b72d13->leave($__internal_2e71b5a1ec04ff6050bd53002ec7d05d4697df4d0bf0b264a4ce585722b72d13_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_7c20ef61ed4b59cc8cde518d9a8f8b8163d7ff481f39cfa4744173ef53e8ea82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c20ef61ed4b59cc8cde518d9a8f8b8163d7ff481f39cfa4744173ef53e8ea82->enter($__internal_7c20ef61ed4b59cc8cde518d9a8f8b8163d7ff481f39cfa4744173ef53e8ea82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_7c20ef61ed4b59cc8cde518d9a8f8b8163d7ff481f39cfa4744173ef53e8ea82->leave($__internal_7c20ef61ed4b59cc8cde518d9a8f8b8163d7ff481f39cfa4744173ef53e8ea82_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_abde4d45b8b90cc1e8d569196d819978240c33919713915f684fc0cb3f76f0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde4d45b8b90cc1e8d569196d819978240c33919713915f684fc0cb3f76f0da->enter($__internal_abde4d45b8b90cc1e8d569196d819978240c33919713915f684fc0cb3f76f0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_abde4d45b8b90cc1e8d569196d819978240c33919713915f684fc0cb3f76f0da->leave($__internal_abde4d45b8b90cc1e8d569196d819978240c33919713915f684fc0cb3f76f0da_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_61358669a905531d103d25dd6aeab3e556f89c1622cbf129da3e89156b62893d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61358669a905531d103d25dd6aeab3e556f89c1622cbf129da3e89156b62893d->enter($__internal_61358669a905531d103d25dd6aeab3e556f89c1622cbf129da3e89156b62893d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_61358669a905531d103d25dd6aeab3e556f89c1622cbf129da3e89156b62893d->leave($__internal_61358669a905531d103d25dd6aeab3e556f89c1622cbf129da3e89156b62893d_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_21d72043a5b9730a81628a330f48785f7f9eeb4766b4c9f43fb0b92b6618b410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d72043a5b9730a81628a330f48785f7f9eeb4766b4c9f43fb0b92b6618b410->enter($__internal_21d72043a5b9730a81628a330f48785f7f9eeb4766b4c9f43fb0b92b6618b410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty(($context["id"] ?? $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_21d72043a5b9730a81628a330f48785f7f9eeb4766b4c9f43fb0b92b6618b410->leave($__internal_21d72043a5b9730a81628a330f48785f7f9eeb4766b4c9f43fb0b92b6618b410_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_3f97fdca887153dba019d6330f478d5afba9df497dbf0618c2ee98b7b10ec3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f97fdca887153dba019d6330f478d5afba9df497dbf0618c2ee98b7b10ec3d4->enter($__internal_3f97fdca887153dba019d6330f478d5afba9df497dbf0618c2ee98b7b10ec3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_3f97fdca887153dba019d6330f478d5afba9df497dbf0618c2ee98b7b10ec3d4->leave($__internal_3f97fdca887153dba019d6330f478d5afba9df497dbf0618c2ee98b7b10ec3d4_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_95d2f2db86d160388e079ab3ef44116e8447539a3f25a4b2b577168ae8fa7718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d2f2db86d160388e079ab3ef44116e8447539a3f25a4b2b577168ae8fa7718->enter($__internal_95d2f2db86d160388e079ab3ef44116e8447539a3f25a4b2b577168ae8fa7718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_95d2f2db86d160388e079ab3ef44116e8447539a3f25a4b2b577168ae8fa7718->leave($__internal_95d2f2db86d160388e079ab3ef44116e8447539a3f25a4b2b577168ae8fa7718_prof);

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
", "form_div_layout.html.twig", "F:\\development\\www\\shikoba\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
