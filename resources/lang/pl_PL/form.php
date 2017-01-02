<?php
/**
 * form.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [

    // new user:
    'bank_name'                      => 'Nazwa banku',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Saldo konta oszczędnościowego',
    'credit_card_limit'              => 'Limit karty kredytowej',
    'automatch'                      => 'Match automatically',
    'skip'                           => 'Pomiń',
    'name'                           => 'Nazwa',
    'active'                         => 'Aktywny',
    'amount_min'                     => 'Minimalna kwota',
    'amount_max'                     => 'Maksymalna kwota',
    'match'                          => 'Matches on',
    'repeat_freq'                    => 'Repeats',
    'journal_currency_id'            => 'Waluta',
    'currency_id'                    => 'Currency',
    'attachments'                    => 'Attachments',
    'journal_amount'                 => 'Amount',
    'journal_asset_source_account'   => 'Asset account (source)',
    'journal_source_account_name'    => 'Revenue account (source)',
    'journal_source_account_id'      => 'Asset account (source)',
    'BIC'                            => 'BIC',
    'account_from_id'                => 'Z konta',
    'account_to_id'                  => 'Na konto',
    'source_account'                 => 'Konto źródłowe',
    'destination_account'            => 'Konto docelowe',
    'journal_destination_account_id' => 'Asset account (destination)',
    'asset_destination_account'      => 'Asset account (destination)',
    'asset_source_account'           => 'Asset account (source)',
    'journal_description'            => 'Opis',
    'note'                           => 'Notatki',
    'split_journal'                  => 'Podziel tę transakcję',
    'split_journal_explanation'      => 'Split this transaction in multiple parts',
    'currency'                       => 'Waluta',
    'account_id'                     => 'Konto aktywów',
    'budget_id'                      => 'Budżet',
    'openingBalance'                 => 'Bilans otwarcia',
    'tagMode'                        => 'Tag mode',
    'tagPosition'                    => 'Lokalizacja taga',
    'virtualBalance'                 => 'Wirtualne saldo',
    'longitude_latitude'             => 'Lokalizacja',
    'targetamount'                   => 'Target amount',
    'accountRole'                    => 'Account role',
    'openingBalanceDate'             => 'Opening balance date',
    'ccType'                         => 'Credit card payment plan',
    'ccMonthlyPaymentDate'           => 'Credit card monthly payment date',
    'piggy_bank_id'                  => 'Piggy bank',
    'returnHere'                     => 'Return here',
    'returnHereExplanation'          => 'After storing, return here to create another one.',
    'returnHereUpdateExplanation'    => 'Po aktualizacji, wróć tutaj.',
    'description'                    => 'Opis',
    'expense_account'                => 'Expense account',
    'revenue_account'                => 'Revenue account',
    'decimal_places'                 => 'Miejsca dziesiętne',

    'revenue_account_source'      => 'Konto przychodów (źródło)',
    'source_account_asset'        => 'Source account (asset account)',
    'destination_account_expense' => 'Destination account (expense account)',
    'destination_account_asset'   => 'Destination account (asset account)',
    'source_account_revenue'      => 'Source account (revenue account)',
    'type'                        => 'Typ',
    'convert_Withdrawal'          => 'Convert withdrawal',
    'convert_Deposit'             => 'Convert deposit',
    'convert_Transfer'            => 'Convert transfer',


    'amount'                     => 'Kwota',
    'date'                       => 'Data',
    'interest_date'              => 'Interest date',
    'book_date'                  => 'Book date',
    'process_date'               => 'Processing date',
    'category'                   => 'Kategoria',
    'tags'                       => 'Tagi',
    'deletePermanently'          => 'Usuń trwale',
    'cancel'                     => 'Anuluj',
    'targetdate'                 => 'Target date',
    'tag'                        => 'Tag',
    'under'                      => 'Under',
    'symbol'                     => 'Symbol',
    'code'                       => 'Code',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Account number',
    'has_headers'                => 'Headers',
    'date_format'                => 'Date format',
    'specifix'                   => 'Bank- or file specific fixes',
    'attachments[]'              => 'Attachments',
    'store_new_withdrawal'       => 'Store new withdrawal',
    'store_new_deposit'          => 'Store new deposit',
    'store_new_transfer'         => 'Store new transfer',
    'add_new_withdrawal'         => 'Add a new withdrawal',
    'add_new_deposit'            => 'Add a new deposit',
    'add_new_transfer'           => 'Add a new transfer',
    'noPiggybank'                => '(no piggy bank)',
    'title'                      => 'Tytuł',
    'notes'                      => 'Notatki',
    'filename'                   => 'Nazwa pliku',
    'mime'                       => 'Typ MIME',
    'size'                       => 'Rozmiar',
    'trigger'                    => 'Wyzwalacz',
    'stop_processing'            => 'Zatrzymaj przetwarzanie',
    'start_date'                 => 'Początek zakresu',
    'end_date'                   => 'Koniec zakresu',
    'export_start_range'         => 'Start of export range',
    'export_end_range'           => 'End of export range',
    'export_format'              => 'Format pliku',
    'include_attachments'        => 'Uwzględnij dołączone załączniki',
    'include_old_uploads'        => 'Include imported data',
    'accounts'                   => 'Export transactions from these accounts',
    'delete_account'             => 'Usuń konto ":name"',
    'delete_bill'                => 'Usuń rachunek ":name"',
    'delete_budget'              => 'Usuń budżet ":name"',
    'delete_category'            => 'Delete category ":name"',
    'delete_currency'            => 'Delete currency ":name"',
    'delete_journal'             => 'Delete transaction with description ":description"',
    'delete_attachment'          => 'Delete attachment ":name"',
    'delete_rule'                => 'Delete rule ":title"',
    'delete_rule_group'          => 'Delete rule group ":title"',
    'attachment_areYouSure'      => 'Are you sure you want to delete the attachment named ":name"?',
    'account_areYouSure'         => 'Are you sure you want to delete the account named ":name"?',
    'bill_areYouSure'            => 'Are you sure you want to delete the bill named ":name"?',
    'rule_areYouSure'            => 'Are you sure you want to delete the rule titled ":title"?',
    'ruleGroup_areYouSure'       => 'Are you sure you want to delete the rule group titled ":title"?',
    'budget_areYouSure'          => 'Are you sure you want to delete the budget named ":name"?',
    'category_areYouSure'        => 'Are you sure you want to delete the category named ":name"?',
    'currency_areYouSure'        => 'Are you sure you want to delete the currency named ":name"?',
    'piggyBank_areYouSure'       => 'Are you sure you want to delete the piggy bank named ":name"?',
    'journal_areYouSure'         => 'Are you sure you want to delete the transaction described ":description"?',
    'mass_journal_are_you_sure'  => 'Are you sure you want to delete these transactions?',
    'tag_areYouSure'             => 'Are you sure you want to delete the tag ":tag"?',
    'permDeleteWarning'          => 'Usuwanie rzeczy z Firefly jest trwałe i nie można tego cofnąć.',
    'mass_make_selection'        => 'You can still prevent items from being deleted by removing the checkbox.',
    'delete_all_permanently'     => 'Delete selected permanently',
    'update_all_journals'        => 'Zmodyfikuj te transakcje',
    'also_delete_transactions'   => 'The only transaction connected to this account will be deleted as well.|All :count transactions connected to this account will be deleted as well.',
    'also_delete_rules'          => 'The only rule connected to this rule group will be deleted as well.|All :count rules connected to this rule group will be deleted as well.',
    'also_delete_piggyBanks'     => 'The only piggy bank connected to this account will be deleted as well.|All :count piggy bank connected to this account will be deleted as well.',
    'bill_keep_transactions'     => 'The only transaction connected to this bill will not be deleted.|All :count transactions connected to this bill will spared deletion.',
    'budget_keep_transactions'   => 'The only transaction connected to this budget will not be deleted.|All :count transactions connected to this budget will spared deletion.',
    'category_keep_transactions' => 'The only transaction connected to this category will not be deleted.|All :count transactions connected to this category will spared deletion.',
    'tag_keep_transactions'      => 'The only transaction connected to this tag will not be deleted.|All :count transactions connected to this tag will spared deletion.',

    'email'                 => 'Adres email',
    'password'              => 'Hasło',
    'password_confirmation' => 'Hasło (ponownie)',
    'blocked'               => 'Jest zablokowany?',
    'blocked_code'          => 'Powód blokady',


    // admin
    'domain'                => 'Domena',
    'single_user_mode'      => 'Tryb pojedynczego użytkownika',
    'must_confirm_account'  => 'Nowi użytkownicy muszą aktywować konto',
    'is_demo_site'          => 'Is demo site',


    // import
    'import_file'           => 'Import file',
    'configuration_file'    => 'Configuration file',
    'import_file_type'      => 'Import file type',
    'csv_comma'             => 'Przecinek (,)',
    'csv_semicolon'         => 'Średnik (;)',
    'csv_tab'               => 'Tabulator (niewidoczny)',
    'csv_delimiter'         => 'CSV field delimiter',
    'csv_import_account'    => 'Default import account',
    'csv_config'            => 'CSV import configuration',


    'due_date'           => 'Termin realizacji',
    'payment_date'       => 'Data płatności',
    'invoice_date'       => 'Invoice date',
    'internal_reference' => 'Internal reference',
];