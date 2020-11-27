<?php

namespace App\DataTables;

use App\Models\ChartOfAccountsModel;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ChartOfAccountDataTable extends DataTable
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
            ->addColumn('action', 'chartofaccount.action');
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
            ->setTableId('chartofaccount-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                //  Button::make('create'),
               // Button::make('excel'),
                 Button::make('print'),
                // Button::make('reset'),
              //  Button::make('pdf')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'general_ledger_account_id',
            'account_group',
            'current_noncurrent',
            'major_account_group_id',
            'sub_major_account_group_id',
            'enable_disable',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'ChartOfAccount_' . date('YmdHis');
    }
}
