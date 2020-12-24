<?php

/*
 |--------------------------------------------------------------------------
 | DO NOT EDIT THIS FILE DIRECTLY.
 |--------------------------------------------------------------------------
*/


return array(

    'Global' => array(
        array(
            'permission' => 'superuser',
            'label'      => 'Super User',
            'note'       => 'Determines whether the user has full access to all aspects of the admin. This setting overrides any more specific permissions throughout the system. ',
            'display'    => true,
        ),
    ),

    'Admin' => array(
        array(
            'permission' => 'admin',
            'label'      => '',
            'note'       => 'Determines whether the user has access to most aspects of the admin. ',
            'display'    => true,
        )
    ),

    'CSV Import' => array(
        array(
            'permission' => 'import',
            'label'      => '',
            'note'       => 'This will allow users to import even if access to users, assets, etc is denied elsewhere.',
            'display'    => true,
        )
    ),

    'Reports' => array(
        array(
            'permission' => 'reports.view',
            'label'      => 'View',
            'note'       => 'Determines whether the user has the ability to view reports.',
            'display'    => true,
        ),
    ),

    'Assets' => array(
        array(
            'permission' => 'assets.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'assets.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => false,
        ),

        array(
            'permission' => 'assets.checkin',
            'label'      => 'Checkin ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => 'assets.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
        ),

        array(
            'permission' => 'assets.audit',
            'label'      => 'Audit ',
            'note'       => 'Allows the user to mark an asset as physically inventoried.',
            'display'    => true,
        ),


        array(
            'permission' => 'assets.view.requestable',
            'label'      => 'View Requestable Assets',
            'note'       => '',
            'display'    => true,
        ),

    ),

    'Users' => array(
        array(
            'permission' => 'users.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.create',
            'label'      => 'Create Users',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.edit',
            'label'      => 'Edit Users',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'users.delete',
            'label'      => 'Delete Users',
            'note'       => '',
            'display'    => true,
        ),

    ),


    'Models' => array(
        array(
            'permission' => 'models.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'models.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),

    ),

    'Categories' => array(
        array(
            'permission' => 'categories.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'categories.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Departments' => array(
        array(
            'permission' => 'departments.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'departments.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Status Labels' => array(
        array(
            'permission' => 'statuslabels.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'statuslabels.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Custom Fields' => array(
        array(
            'permission' => 'customfields.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.create',
            'label'      => 'Create',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.edit',
            'label'      => 'Edit',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'customfields.delete',
            'label'      => 'Delete',
            'note'       => '',
            'display'    => true,
        ),
    ), 

    'Suppliers' => array(
        array(
            'permission' => 'suppliers.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'suppliers.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),


    'Manufacturers' => array(
        array(
            'permission' => 'manufacturers.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'manufacturers.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Depreciations' => array(
        array(
            'permission' => 'depreciations.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'depreciations.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),

    'Companies' => array(
        array(
            'permission' => 'companies.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'companies.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'companies.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
        ),
        array(
            'permission' => 'companies.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
        ),
    ),




    'Self' => array(
        array(
            'permission' => 'self.two_factor',
            'label'      => 'Two-Factor Authentication',
            'note'       => 'The user may disable/enable two-factor authentication themselves if two-factor is enabled and set to selective.',
            'display'    => true,
        ),

        array(
            'permission' => 'self.api',
            'label'      => 'Create API Keys',
            'note'       => 'The user create personal API keys to utilize the REST API.',
            'display'    => true,
        ),

        array(
            'permission' => 'self.edit_location',
            'label'      => 'Profile Edit Location',
            'note'       => 'The user may update their own location in their profile. Note that this is not affected by any additional Users permissions you grant to this user or group.',
            'display'    => true,
        ),

        array(
            'permission' => 'self.checkout_assets',
            'label'      => 'Self-Checkout',
            'note'       => 'This user may check out assets that are marked for self-checkout.',
            'display'    => true,
        ),

    ),





);
