<?php
namespace Site\Fields\Groups;

use Site\Fields\FieldGroup;

class PageHeroFields extends FieldGroup
{
    public function key(): string { return 'page_hero'; }

    public function title(): string { return 'Page Hero'; }

    public function location(): array
    {
        return [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ],
            ],
        ];
    }

    public function fields(): array
    {
        return [
            [
                'key' => $this->fkey('banner_title'),
                'label' => 'Banner Title',
                'name' => 'banner_title',
                'type' => 'text',
                'wrapper' => ['width' => 100],
            ],
            [
                'key' => $this->fkey('banner_type'),
                'label' => 'Banner Background Type',
                'name' => 'banner_type',
                'type' => 'radio',
                'choices' => [
                    'image' => 'Image',
                    'video' => 'Video',
                ],
                'layout' => 'horizontal',
                'default_value' => 'image',
            ],

            /**
             * Image fields (desktop & mobile)
             */
            [
                'key' => $this->fkey('banner_image_desktop'),
                'label' => 'Banner Image (Desktop)',
                'name' => 'banner_image_desktop',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'wrapper' => ['width' => 50],
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('banner_type'),
                            'operator' => '==',
                            'value' => 'image',
                        ],
                    ],
                ],
            ],
            [
                'key' => $this->fkey('banner_image_mobile'),
                'label' => 'Banner Image (Mobile)',
                'name' => 'banner_image_mobile',
                'type' => 'image',
                'return_format' => 'id',
                'preview_size' => 'medium',
                'library' => 'all',
                'wrapper' => ['width' => 50],
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('banner_type'),
                            'operator' => '==',
                            'value' => 'image',
                        ],
                    ],
                ],
            ],

            /**
             * Video fields
             */
            [
                'key' => $this->fkey('video_source_type'),
                'label' => 'Video Source Type',
                'name' => 'video_source_type',
                'type' => 'radio',
                'choices' => [
                    'url' => 'Video URL',
                    'upload' => 'Upload Video',
                ],
                'layout' => 'horizontal',
                'default_value' => 'url',
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('banner_type'),
                            'operator' => '==',
                            'value' => 'video',
                        ],
                    ],
                ],
            ],

            // Video URL (desktop & mobile)
            [
                'key' => $this->fkey('banner_video_url_desktop'),
                'label' => 'Banner Video URL (Desktop)',
                'name' => 'banner_video_url_desktop',
                'type' => 'url',
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('video_source_type'),
                            'operator' => '==',
                            'value' => 'url',
                        ],
                    ],
                ],
            ],
            [
                'key' => $this->fkey('banner_video_url_mobile'),
                'label' => 'Banner Video URL (Mobile)',
                'name' => 'banner_video_url_mobile',
                'type' => 'url',
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('video_source_type'),
                            'operator' => '==',
                            'value' => 'url',
                        ],
                    ],
                ],
            ],

            // Video Upload (desktop & mobile)
            [
                'key' => $this->fkey('banner_video_upload_desktop'),
                'label' => 'Banner Video Upload (Desktop)',
                'name' => 'banner_video_upload_desktop',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4,webm,ogg',
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('video_source_type'),
                            'operator' => '==',
                            'value' => 'upload',
                        ],
                    ],
                ],
            ],
            [
                'key' => $this->fkey('banner_video_upload_mobile'),
                'label' => 'Banner Video Upload (Mobile)',
                'name' => 'banner_video_upload_mobile',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4,webm,ogg',
                'conditional_logic' => [
                    [
                        [
                            'field' => $this->fkey('video_source_type'),
                            'operator' => '==',
                            'value' => 'upload',
                        ],
                    ],
                ],
            ],

            /**
             * CTA fields
             */
            [
                'key' => $this->fkey('show_cta'),
                'label' => 'Show CTA',
                'name' => 'show_cta',
                'type' => 'true_false',
                'ui' => 1,
            ],
        ];
    }
}