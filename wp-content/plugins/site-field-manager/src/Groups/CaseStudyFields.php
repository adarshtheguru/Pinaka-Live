<?php

namespace Site\Fields\Groups;

use Site\Fields\FieldGroup;

class CaseStudyFields extends FieldGroup
{
    public function key(): string
    {
        return 'case_study_fields';
    }

    public function title(): string
    {
        return 'Case Study Fields';
    }

    public function location(): array
    {
        return [
            [
                [
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'case_study', // <-- CPT slug
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
                    [['field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'image']],
                ],
            ],
            [
                'key' => $this->fkey('banner_image_mobile'),
                'label' => 'Banner Image (Mobile)',
                'name' => 'banner_image_mobile',
                'type' => 'image',
                'return_format' => 'id',
                'conditional_logic' => [
                    [['field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'image']],
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
                    [['field' => $this->fkey('banner_type'), 'operator' => '==', 'value' => 'video']],
                ],
            ],

            // Video URLs
            [
                'key' => $this->fkey('banner_video_url_desktop'),
                'label' => 'Banner Video URL (Desktop)',
                'name' => 'banner_video_url_desktop',
                'type' => 'url',
                'conditional_logic' => [
                    [['field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'url']],
                ],
            ],
            [
                'key' => $this->fkey('banner_video_url_mobile'),
                'label' => 'Banner Video URL (Mobile)',
                'name' => 'banner_video_url_mobile',
                'type' => 'url',
                'conditional_logic' => [
                    [['field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'url']],
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
                    [['field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'upload']],
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
                    [['field' => $this->fkey('video_source_type'), 'operator' => '==', 'value' => 'upload']],
                ],
            ],

            /**
             * Head Section
             */
            [
                'key'   => $this->fkey('head_prefix'),
                'label' => 'Head Prefix',
                'name'  => 'head_prefix',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('head_title'),
                'label' => 'Head Title',
                'name'  => 'head_title',
                'type'  => 'text',
            ],

            /**
             * Blue Box Left
             */
            [
                'key'   => $this->fkey('blue_box_left_title'),
                'label' => 'Blue Box Left Title',
                'name'  => 'blue_box_left_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('blue_box_left_desc'),
                'label' => 'Blue Box Left Description',
                'name'  => 'blue_box_left_desc',
                'type'  => 'textarea',
            ],
            [
                'key'   => $this->fkey('blue_box_left_list_title'),
                'label' => 'Blue Box Left List Title',
                'name'  => 'blue_box_left_list_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('blue_box_left_listings'),
                'label' => 'Blue Box Left Listings',
                'name'  => 'blue_box_left_listings',
                'type'  => 'repeater',
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('blue_box_left_listing_text'),
                        'label' => 'Listing',
                        'name'  => 'listing',
                        'type'  => 'text',
                    ],
                ],
            ],

            /**
             * Blue Box Right
             */
            [
                'key'   => $this->fkey('blue_box_right_title'),
                'label' => 'Blue Box Right Title',
                'name'  => 'blue_box_right_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('blue_box_right_desc'),
                'label' => 'Blue Box Right Description',
                'name'  => 'blue_box_right_desc',
                'type'  => 'textarea',
            ],
            [
                'key'   => $this->fkey('blue_box_right_list_title'),
                'label' => 'Blue Box Right List Title',
                'name'  => 'blue_box_right_list_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('blue_box_right_listings'),
                'label' => 'Blue Box Right Listings',
                'name'  => 'blue_box_right_listings',
                'type'  => 'repeater',
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('blue_box_right_listing_text'),
                        'label' => 'Listing',
                        'name'  => 'listing',
                        'type'  => 'text',
                    ],
                ],
            ],

            /**
             * Strategy
             */
            [
                'key'   => $this->fkey('strategy'),
                'label' => 'Strategy',
                'name'  => 'strategy',
                'type'  => 'group',
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('strategy_title'),
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => $this->fkey('strategy_desc'),
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                    ],
                    [
                        'key'   => $this->fkey('strategy_repeater'),
                        'label' => 'Listing',
                        'name'  => 'listing',
                        'type'  => 'repeater',
                        'sub_fields' => [
                            [
                                'key'   => $this->fkey('strategy_list_title'),
                                'label' => 'Title',
                                'name'  => 'list_title',
                                'type'  => 'text',
                            ],
                            [
                                'key'   => $this->fkey('strategy_point'),
                                'label' => 'Point',
                                'name'  => 'point',
                                'type'  => 'text',
                            ],
                        ],
                    ],
                ],
            ],

            /**
             * Campaigns
             */
            [
                'key'   => $this->fkey('campaigns'),
                'label' => 'Campaigns',
                'name'  => 'campaigns',
                'type'  => 'repeater',
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('campaign_title'),
                        'label' => 'Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => $this->fkey('campaign_images'),
                        'label' => 'Images',
                        'name'  => 'images',
                        'type'  => 'repeater',
                        'sub_fields' => [
                            [
                                'key'   => $this->fkey('campaign_image'),
                                'label' => 'Image',
                                'name'  => 'image',
                                'type'  => 'image',
                                'return_format' => 'id',
                            ],
                        ],
                    ],
                ],
            ],

            /**
             * Executions
             */
            [
                'key'   => $this->fkey('executions'),
                'label' => 'Executions',
                'name'  => 'executions',
                'type'  => 'group',
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('execution_listings'),
                        'label' => 'Listings',
                        'name'  => 'listings',
                        'type'  => 'repeater',
                        'sub_fields' => [
                            [
                                'key'   => $this->fkey('execution_listing'),
                                'label' => 'Listing',
                                'name'  => 'listing',
                                'type'  => 'text',
                            ],
                        ],
                    ],
                    [
                        'key'   => $this->fkey('execution_image'),
                        'label' => 'Single Image',
                        'name'  => 'image',
                        'type'  => 'image',
                        'return_format' => 'id',
                    ],
                ],
            ],

            /**
             * Results
             */
            [
                'key'   => $this->fkey('results_title'),
                'label' => 'Results Title',
                'name'  => 'results_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('results_desc'),
                'label' => 'Results Description',
                'name'  => 'results_desc',
                'type'  => 'textarea',
            ],
            [
                'key'   => $this->fkey('results_boxes'),
                'label' => 'Results Boxes',
                'name'  => 'results_boxes',
                'type'  => 'repeater',
                'max'   => 5,
                'sub_fields' => [
                    [
                        'key'   => $this->fkey('results_box_title'),
                        'label' => 'Box Title',
                        'name'  => 'box_title',
                        'type'  => 'text',
                    ],
                    [
                        'key'   => $this->fkey('results_box_desc'),
                        'label' => 'Box Description',
                        'name'  => 'box_desc',
                        'type'  => 'textarea',
                    ],
                ],
            ],

            /**
             * Takeaway
             */
            [
                'key'   => $this->fkey('takeaway_title'),
                'label' => 'Takeaway Title',
                'name'  => 'takeaway_title',
                'type'  => 'text',
            ],
            [
                'key'   => $this->fkey('takeaway_desc'),
                'label' => 'Takeaway Description',
                'name'  => 'takeaway_desc',
                'type'  => 'textarea',
            ],
            /**
             * Thumbnail on Service Page
             */
            [
                'key'   => $this->fkey('service_thumbnail_image'),
                'label' => 'Service Thumbnail Image',
                'name'  => 'service_thumbnail_image',
                'type'  => 'image',
                'return_format' => 'id',
            ],
        ];
    }
}
