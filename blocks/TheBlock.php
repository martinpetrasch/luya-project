<?php
namespace app\blocks;

class TheBlock extends \cmsadmin\base\Block
{
    public function name()
    {
        return 'Test Project Block';
    }
    
    public function config()
    {
        return [
            'vars' => [
                ['var' => 'content', 'label' => 'Inhalt', 'type' => 'zaa-textarea'],
                ['var' => 'parseMarkdown', 'label' => 'Parse Markdown?', 'type' => 'zaa-input-select', 'options' => 
                    [
                        ["id" => 0 , "label" => "Nein" ] , ["id" => 1, "label" => "Ja"]   
                    ]
                ]
            ]
        ];
    }
    
    public function twigFrontend()
    {
        return '<p>{{ vars.content }}</p><p> {{ vars.parseMarkdown }}</p>';
    }
    
    public function twigAdmin()
    {
        return '<p>{{ vars.content }}</p>';
    }
}