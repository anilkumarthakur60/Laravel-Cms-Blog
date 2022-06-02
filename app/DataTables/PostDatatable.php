<?php

namespace App\DataTables;

use App\Post;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PostDatatable extends DataTable
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
            ->addColumn('action', 'postdatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\PostDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PostDatatable $model)
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
            ->setTableId('postdatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()

            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
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
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->width(60)
                ->addClass('text-center'),
            Column::make('id'),
            Column::make('title'),
            Column::make('slug'),
            Column::make('description'),
            Column::make('content'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::make('slug'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Post_' . date('YmdHis');
    }
}
