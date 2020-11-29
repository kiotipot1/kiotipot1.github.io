<?php

namespace App\DataTables;

use App\Models\ChartOfAccountsModel;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ChartOfAccountsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {

        return datatables()
            ->eloquent($query)

            ->addColumn('action', function ($row) {
                // return '
                        
                //         <button  class="btn btn-primary"  v-on:click=say("hi")>Update</button>
                //         <a class="btn btn-success" id="edit-user" data-toggle="modal" data-info=' . $row . '>Edit </a>
                //         <button type="button" class="btn btn-danger"  data-toggle="modal"
                      
                        
                        
                                                
                        
                        
                //         ';

                
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm" @click=show()>Delete</a>';
         
                            return $btn;
            })
            ->rawColumns(['action'])
           
            
            ;

    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ChartOfAccountsModel $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ChartOfAccountsModel $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('chartofaccounts-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //  ->dom('Bfrtip')
            ->orderBy(1);

        // ->buttons(
        //     Button::make('create'),
        //     Button::make('export'),
        //     Button::make('print'),
        //     Button::make('reset'),
        //     Button::make('reload')
        // );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('general_ledger_account_id'),
            Column::make('account_group'),
            Column::make('current_noncurrent'),
            Column::make('major_account_group_id'),
            Column::make('sub_major_account_group_id'),
            Column::make('enable_disable'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ChartOfAccounts_' . date('YmdHis');
    }
    public function show($row){
        echo $row;
    }
}
