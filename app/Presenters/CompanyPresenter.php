<?php

namespace App\Presenters;

/**
 * Class CompanyPresenter
 * @package App\Presenters
 */
class CompanyPresenter extends Presenter
{
    /**
     * Json Column Layout for bootstrap table
     * @return string
     */
    public static function dataTableLayout()
    {
        $layout = [
            [
                "field" => "id",
                "searchable" => false,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('general.id'),
                "visible" => false
            ],[
                "field" => "name",
                "searchable" => true,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('admin/companies/table.name'),
                "visible" => true,
                "formatter" => 'companiesLinkFormatter',
            ],[
                "field" => "image",
                "searchable" => false,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('general.image'),
                "visible" => true,
                "formatter" => 'imageFormatter',
            ],[
                "field" => "users_count",
                "searchable" => false,
                "sortable" => true,
                "title" => '<span class="hidden-xs"><i class="fa fa-users"></i></span><span class="hidden-md hidden-lg">'.trans('general.users').'</span></th>',
                "visible" => true,
 
            ],[
                "field" => "assets_count",
                "searchable" => false,
                "sortable" => true,
                "title" => '<span class="hidden-xs"><i class="fa fa-barcode" aria-hidden="true"></i></span><span class="hidden-md hidden-lg">'.trans('general.assets').'</span>',
                "visible" => true,

            ],[
                "field" => "updated_at",
                "searchable" => false,
                "sortable" => true,
                "visible" => false,
                "title" => trans('general.updated_at'),
                "formatter" => 'createdAtFormatter',
            ],[
                "field" => "created_at",
                "searchable" => false,
                "sortable" => true,
                "visible" => false,
                "title" => trans('general.created_at'),
                "formatter" => 'createdAtFormatter',
            ],[
                "field" => "actions",
                "searchable" => false,
                "sortable" => false,
                "switchable" => false,
                "title" => trans('table.actions'),
                "visible" => true,
                "formatter" => "companiesActionsFormatter",
            ]
        ];

        return json_encode($layout);
    }


    /**
     * Link to this companies name
     * @return string
     */
    public function nameUrl()
    {
        return (string) link_to_route('companies.show', $this->name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('companies.show', $this->id);
    }
}
