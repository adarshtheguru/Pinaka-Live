<?php
namespace Site\Fields;

abstract class FieldGroup
{
    protected string $prefix = 'site'; // used to keep keys unique across plugins/themes

    // A short, unique slug for this group (e.g., 'page_hero')
    abstract public function key(): string;

    // The admin title of the group
    abstract public function title(): string;

    // ACF `location` rules array
    abstract public function location(): array;

    // Array of ACF `fields`
    abstract public function fields(): array;

    // Compose the group key
    public function group_key(): string
    {
        return 'group_' . $this->prefix . '_' . $this->key();
    }

    // Helper to create unique field keys easily
    protected function fkey(string $name): string
    {
        return 'field_' . $this->prefix . '_' . $this->key() . '_' . $name;
    }

    // Export to the array format used by acf_add_local_field_group
    public function toArray(): array
    {
        return [
            'key' => $this->group_key(),
            'title' => $this->title(),
            'fields' => $this->fields(),
            'location' => $this->location(),
            'position' => 'normal',
            'style' => 'default',
            'menu_order' => 0,
            'active' => true,
        ];
    }
}