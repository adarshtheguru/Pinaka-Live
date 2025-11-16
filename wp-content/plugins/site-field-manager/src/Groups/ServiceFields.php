<?php
namespace Site\Fields\Groups;

use Site\Fields\FieldGroup;

class ServiceFields extends FieldGroup
{
    public function key(): string { return 'service_fields'; }

    public function title(): string { return 'Service Fields'; }

    public function location(): array
    {
        return [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'service', // <-- CPT slug
                ],
            ],
        ];
    }

    public function fields(): array
    {
        return [
            // Banner Title
            [
                'key' => $this->fkey('banner_title'),
                'label' => 'Banner Title',
                'name' => 'banner_title',
                'type' => 'text',
            ],

            // Banner Background Type
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
             * Image fields
             */
            [
                'key' => $this->fkey('banner_image_desktop'),
                'label' => 'Banner Image (Desktop)',
                'name' => 'banner_image_desktop',
                'type' => 'image',
                'return_format' => 'id',
                'conditional_logic' => [
                    [[ 'field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'image' ]],
                ],
            ],
            [
                'key' => $this->fkey('banner_image_mobile'),
                'label' => 'Banner Image (Mobile)',
                'name' => 'banner_image_mobile',
                'type' => 'image',
                'return_format' => 'id',
                'conditional_logic' => [
                    [[ 'field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'image' ]],
                ],
            ],

            /**
             * Video source type toggle
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
                    [[ 'field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'video' ]],
                ],
            ],

            // Video URLs
            [
                'key' => $this->fkey('banner_video_url_desktop'),
                'label' => 'Banner Video URL (Desktop)',
                'name' => 'banner_video_url_desktop',
                'type' => 'url',
                'conditional_logic' => [
                    [[ 'field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'url' ]],
                ],
            ],
            [
                'key' => $this->fkey('banner_video_url_mobile'),
                'label' => 'Banner Video URL (Mobile)',
                'name' => 'banner_video_url_mobile',
                'type' => 'url',
                'conditional_logic' => [
                    [[ 'field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'url' ]],
                ],
            ],

            // Video Uploads
            [
                'key' => $this->fkey('banner_video_upload_desktop'),
                'label' => 'Banner Video Upload (Desktop)',
                'name' => 'banner_video_upload_desktop',
                'type' => 'file',
                'return_format' => 'url',
                'mime_types' => 'mp4,webm,ogg',
                'conditional_logic' => [
                    [[ 'field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'upload' ]],
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
                    [[ 'field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'upload' ]],
                ],
            ],

            /**
             * Section Fields
             */
            [
                'key' => $this->fkey('intro_text_a'),
                'label' => 'Intro Text Part A',
                'name' => 'intro_text_a',
                'type' => 'textarea',
            ],
            [
                'key' => $this->fkey('intro_text_b'),
                'label' => 'Intro Text Part B',
                'name' => 'intro_text_b',
                'type' => 'textarea',
            ],

            [
                'key' => $this->fkey('deliver_heading'),
                'label' => 'Deliver Result Heading',
                'name' => 'deliver_heading',
                'type' => 'text',
            ],
            [
                'key' => $this->fkey('deliver_content'),
                'label' => 'Deliver Result Content',
                'name' => 'deliver_content',
                'type' => 'wysiwyg',
            ],
            [
                'key'           => $this->fkey('redirect_link'),
                'label'         => 'Select Page/Post to Redirect CTA',
                'name'          => 'deliver_link',
                'type'          => 'post_object',
                'post_type'     => ['post', 'page'], // fetch posts & pages
                'return_format' => 'url',            // so get_field returns the link
                'ui'            => 1,                // nice dropdown UI
            ],
        ];
    }
}