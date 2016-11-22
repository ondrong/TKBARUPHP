<?php 

return [
    'create' => [
        'title' => 'Sales Order',
        'page_title' => 'Sales Order',
        'page_title_desc' => '',
        'tab' => [
            'sales' => 'Sales',
        ],
        'box' => [
            'supplier' => 'Supplier',
            'purchase_order_detail' => 'Detail',
            'shipping' => 'Shipping',
            'transactions' => 'Transactions',
            'remarks' => 'Remarks',
            'customer' => 'Customer',
            'sales_order_detail' => '',
        ],
        'field' => [
            'customer_type' => 'Customer Type',
            'customer_name' => 'Name',
            'customer_details' => 'Details',
            'shipping_date' => 'Shipping Date',
            'warehouse' => 'Warehouse',
            'vendor_trucking' => 'Vendor Trucking',
        ],
        'so_code' => 'Code',
        'so_type' => 'Sales Type',
        'so_date' => 'Date',
        'so_status' => 'Status',
        'table' => [
            'item' => [
                'header' => [
                    'product_name' => 'Product Name',
                    'quantity' => 'Quantity',
                    'unit' => 'UoM',
                    'price_unit' => 'Price',
                    'total_price' => 'Total Price',
                ],
            ],
            'total' => [
                'body' => [
                    'total' => 'Total Amount',
                ],
            ],
        ],
    ],
    'revise' => [
        'title' => 'Revise Sales Order',
        'page_title' => 'Revise Sales Order',
        'page_title_desc' => '',
        'box' => [
            'customer' => 'Customer',
            'sales_order_detail' => 'Detail',
            'shipping' => 'Shipping',
            'transactions' => 'Transactions',
            'remarks' => 'Remarks',
        ],
        'field' => [
            'customer_type' => 'Customer Type',
            'customer_name' => 'Name',
            'customer_details' => 'Details',
            'shipping_date' => 'Shipping Date',
            'warehouse' => 'Warehouse',
            'vendor_trucking' => 'Vendor Trucking',
        ],
        'so_code' => 'Code',
        'so_type' => 'Sales Type',
        'so_date' => 'Date',
        'so_status' => 'Status',
        'table' => [
            'item' => [
                'header' => [
                    'product_name' => 'Product Name',
                    'quantity' => 'Quantity',
                    'unit' => 'UoM',
                    'price_unit' => 'Price',
                    'total_price' => 'Total Price',
                ],
            ],
            'total' => [
                'body' => [
                    'total' => 'Total Amount',
                ],
            ],
        ],
        'index' => [
            'title' => 'Revise Sales Order',
            'page_title' => 'Revise Sales Order',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Sales Order List',
            ],
            'table' => [
                'header' => [
                    'code' => 'Code',
                    'so_date' => 'Created Date',
                    'customer' => 'Customer',
                    'shipping_date' => 'Shipping Date',
                    'status' => 'Status',
                ],
            ],
        ],
    ],
    'payment' => [
        'index' => [
            'title' => 'Sales Order Payment',
            'page_title' => 'Sales Order Payment',
            'page_title_desc' => '',
            'header' => [
                'title' => 'Sales Order List',
            ],
            'table' => [
                'header' => [
                    'code' => 'Code',
                    'so_date' => 'Created Date',
                    'customer' => 'Customer',
                    'total' => 'Total Amount',
                    'paid' => 'Paid Amount',
                    'rest' => 'Rest Amount',
                    'po_date' => '',
                    'supplier' => '',
                ],
            ],
        ],
        'cash' => [
            'field' => [
                'customer_type' => 'Type',
                'customer_name' => 'Name',
                'customer_details' => 'Details',
                'shipping_date' => 'Date',
                'warehouse' => 'Warehouse',
                'vendor_trucking' => 'Vendor Trucking',
                'payment_type' => 'Payment Type',
                'payment_date' => 'Payment Date',
                'payment_amount' => 'Payment Amount',
            ],
            'so_code' => 'Code',
            'so_type' => 'Type',
            'so_date' => 'Date',
            'so_status' => 'Status',
            'title' => 'Sales Order Cash Payment',
            'page_title' => 'Sales Order Cash Payment',
            'page_title_desc' => 'Create cash payment for sales order',
            'box' => [
                'customer' => 'Customer',
                'sales_order_detail' => 'Detail',
                'shipping' => 'Shipping',
                'transactions' => 'Transaction',
                'remarks' => 'Remarks',
                'payment_history' => 'Payment History',
                'payment' => 'Payment',
            ],
            'table' => [
                'item' => [
                    'header' => [
                        'product_name' => 'Product',
                        'unit' => 'UoM',
                        'price_unit' => 'Price',
                        'total_price' => 'Total Price',
                        'quantity' => '',
                    ],
                ],
                'total' => [
                    'body' => [
                        'total' => 'Total Amount',
                        'paid_amount' => 'Paid Amount',
                        'to_be_paid_amount' => 'Rest Amount',
                    ],
                ],
                'payments' => [
                    'header' => [
                        'payment_type' => 'Payment Type',
                        'payment_date' => 'Payment Date',
                        'payment_amount' => 'Payment Amount',
                        'payment_status' => 'Payment Status',
                        'effective_date' => 'Effective Date',
                        'account_from' => 'Account From',
                        'account_to' => 'Account To',
                        'cash' => 'Cash',
                        'transfer' => 'Transfer',
                        'giro' => 'Giro',
                        'bank' => 'Bank',
                        'serial_number' => 'Serial Number',
                        'printed_name' => 'Printed Name',
                    ],
                ],
            ],
        ],
        'transfer' => [
            'field' => [
                'customer_type' => 'Type',
                'customer_name' => 'Name',
                'customer_details' => 'Details',
                'shipping_date' => 'Date',
                'warehouse' => 'Warehouse',
                'vendor_trucking' => 'Vendor Trucking',
                'payment_type' => 'Payment Type',
                'payment_date' => 'Payment Date',
                'payment_amount' => 'Payment Amount',
                'effective_date' => 'Effective Date',
                'bank_from' => 'Bank From',
                'bank_to' => 'Bank To',
            ],
            'so_code' => 'Code',
            'so_type' => 'Type',
            'so_date' => 'Date',
            'so_status' => 'Status',
            'title' => 'Sales Order Transfer Payment',
            'page_title' => 'Sales Order Transfer Payment',
            'page_title_desc' => 'Create transfer payment for sales order',
            'box' => [
                'customer' => 'Customer',
                'sales_order_detail' => 'Detail',
                'shipping' => 'Shipping',
                'transactions' => 'Transaction',
                'remarks' => 'Remarks',
                'payment_history' => 'Payment History',
                'payment' => 'Payment',
            ],
            'table' => [
                'item' => [
                    'header' => [
                        'product_name' => 'Product',
                        'unit' => 'UoM',
                        'price_unit' => 'Price',
                        'total_price' => 'Total Price',
                        'quantity' => '',
                    ],
                ],
                'total' => [
                    'body' => [
                        'total' => 'Total Amount',
                        'paid_amount' => 'Paid Amount',
                        'to_be_paid_amount' => 'Rest Amount',
                    ],
                ],
                'payments' => [
                    'header' => [
                        'payment_type' => 'Payment Type',
                        'payment_date' => 'Payment Date',
                        'payment_amount' => 'Payment Amount',
                        'payment_status' => 'Payment Status',
                    ],
                ],
            ],
        ],
        'giro' => [
            'field' => [
                'customer_type' => 'Type',
                'customer_name' => 'Name',
                'customer_details' => 'Details',
                'shipping_date' => 'Date',
                'warehouse' => 'Warehouse',
                'vendor_trucking' => 'Vendor Trucking',
                'payment_type' => 'Payment Type',
                'bank' => 'Bank',
                'serial_number' => 'Serial Number',
                'payment_date' => 'Payment Date',
                'payment_amount' => 'Payment Amount',
                'effective_date' => 'Effective Date',
                'printed_name' => 'Printed Name',
                'remarks' => 'Remarks',
            ],
            'so_code' => 'Code',
            'so_type' => 'Type',
            'so_date' => 'Date',
            'so_status' => 'Status',
            'title' => 'Sales Order Giro Payment',
            'page_title' => 'Sales Order Giro Payment',
            'page_title_desc' => 'Create giro payment for sales order',
            'box' => [
                'customer' => 'Customer',
                'sales_order_detail' => 'Detail',
                'shipping' => 'Shipping',
                'transactions' => 'Transaction',
                'remarks' => 'Remarks',
                'payment_history' => 'Payment History',
                'payment' => 'Payment',
            ],
            'table' => [
                'item' => [
                    'header' => [
                        'product_name' => 'Product',
                        'unit' => 'UoM',
                        'price_unit' => 'Price',
                        'total_price' => 'Total Price',
                        'quantity' => '',
                    ],
                ],
                'total' => [
                    'body' => [
                        'total' => 'Total Amount',
                        'paid_amount' => 'Paid Amount',
                        'to_be_paid_amount' => 'Rest Amount',
                    ],
                ],
                'payments' => [
                    'header' => [
                        'payment_type' => 'Payment Type',
                        'payment_date' => 'Payment Date',
                        'payment_amount' => 'Payment Amount',
                        'payment_status' => 'Payment Status',
                    ],
                ],
            ],
        ],
    ],
    'copy' => [
        'title' => '',
        'page_title' => '',
        'page_title_desc' => '',
        'header' => [
            'title' => '',
        ],
        'table' => [
            'header' => [
                'copy_code' => '',
                'remarks' => '',
            ],
        ],
    ],
    'field' => [
        'so_code' => '',
    ],
];