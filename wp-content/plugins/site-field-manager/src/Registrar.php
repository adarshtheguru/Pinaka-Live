<?php
namespace Site\Fields;

class Registrar
{
    /** @var FieldGroup[] */
    private array $groups;

    public function __construct(array $groups)
    {
        $this->groups = $groups;
    }

    public function register(): void
    {
        foreach ($this->groups as $group) {
            acf_add_local_field_group($group->toArray());
        }
    }
}