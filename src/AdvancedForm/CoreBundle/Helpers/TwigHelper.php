<?php
namespace AdvancedForm\CoreBundle\Helpers;

class TwigHelper extends \Twig_Extension
{
    public function getTests()
    {
        return array(
            'numeric' => new \Twig_Test_Function('is_numeric'),
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'acme_numeric';
    }
}
