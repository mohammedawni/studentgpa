<?php

namespace App\DataTables;

use App\Models\Student;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class StudentDataTable extends DataTable
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
            ->addColumn('checkbox', 'admin.students.btn.checkbox')
            ->addColumn('delete', 'admin.students.btn.delete')
            ->addColumn('edit', 'admin.students.btn.edit')
            ->rawColumns(['delete', 'edit', 'checkbox']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
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
                    ->setTableId('student-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1, 'asc')
                    ->lengthMenu([10,25,50,100])
                    ->initComplete("function () {
                        this.api().columns([1,2,3]).every(function () {
                            var column = this;
                            var input = document.createElement(\"input\");
                            $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                        });
                    }")
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload'),
                        Button::make('pageLength')
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
            Column::computed('checkbox')
                  ->exportable(false)
                  ->printable(false)
                  ->orderable(false)
                  ->width(10)
                  ->addClass('text-center')
                  ->title("<input type='checkbox' id='students_checkbox' />"),
            Column::make('id'),
            Column::make('name'),
            Column::make('gpa'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('delete')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::computed('edit')
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
        return 'Student_' . date('YmdHis');
    }
}
