<?php
namespace Site\Fields\Groups;

use Site\Fields\FieldGroup;

class PostSeoFields extends FieldGroup
{
    public function key(): string { return 'post_seo'; }

    public function title(): string { return 'SEO'; }

    // Apply only to Posts
    public function location(): array
    {
        return [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ],
            ],
        ];
    }

    public function fields(): array
    {
        return [
            [
                'key' => $this->fkey('meta_title'),
                'label' => 'Meta Title',
                'name' => 'meta_title',
                'type' => 'text',
            ],
            [
                'key' => $this->fkey('meta_description'),
                'label' => 'Meta Description',
                'name' => 'meta_description',
                'type' => 'textarea',
                'new_lines' => 'br',
            ],
            [
                'key' => $this->fkey('noindex'),
                'label' => 'Noindex',
                'name' => 'noindex',
                'type' => 'true_false',
                'ui' => 1,
            ],
        ];
    }
}