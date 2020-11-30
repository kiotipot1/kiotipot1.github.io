<?php

namespace App\Exports;

use App\models\ChartOfAccountsModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChartOfAccountExport implements FromQuery, WithHeadings,ShouldAutoSize, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function query()
  {


  //  $chart_of_accounts = ChartOfAccountsModel::
   $chart_of_accounts= ChartOfAccountsModel::query()->with('getGeneralLedgerAccount', 'getMajorAccountGroup', 'getSubMajorAccountGroup');
      
 
    return $chart_of_accounts;
  }
  public function map($chart_of_accounts): array
    {
      
        return [
            $chart_of_accounts->id,
            $chart_of_accounts->getGeneralLedgerAccount->general_ledger_account_name,
            $chart_of_accounts->account_group,
            $chart_of_accounts->current_noncurrent,
            $chart_of_accounts->getMajorAccountGroup->major_account_name,
            $chart_of_accounts->getSubMajorAccountGroup->sub_major_account_name,
            
            
        ];
    }

  public function headings(): array
  {
    return [


      'id',
      'general_ledger_account_name',
      'account_group',
      'current_noncurrent',
      'sub_major_account_group_name',
      'enable_disable'

    ];
  }
}
