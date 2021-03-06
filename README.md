# subject-220701

- ### Oracle 
  - (1) [dual 表](https://ja.wikipedia.org/wiki/DUAL%E8%A1%A8#:~:text=DUAL%E8%A1%A8%EF%BC%88DUAL%E3%81%B2%E3%82%87%E3%81%86%EF%BC%89%E3%81%AF,%E8%A1%8C%E3%81%86%E5%A0%B4%E5%90%88%E3%81%AB%E4%BD%BF%E3%82%8F%E3%82%8C%E3%82%8B%E3%80%82)
  - (2) [ROWID 疑似列](https://docs.oracle.com/cd/E16338_01/server.112/b56299/pseudocolumns008.htm)
  - (3) 結合演算子 => ||

### インラインビュー
```sql
select * from ( 

select * from 得意先マスタ 
	left outer join 社員マスタ
	on 得意先マスタ.担当者 = 社員マスタ.社員コード

) 得意先データ
```

### [PL/SQL](https://products.sint.co.jp/siob/blog/plsql#:~:text=%E3%81%BE%E3%81%A8%E3%82%81-,PL%2FSQL%E3%81%A8%E3%81%AF%EF%BC%9F,%E4%BB%A5%E4%B8%8B%E3%81%8C%E3%81%82%E3%81%92%E3%82%89%E3%82%8C%E3%81%BE%E3%81%99%E3%80%82)
```sql
create table proc_debug (
	data1 number,
	data2 number,
	data3 varchar2(100),
	data4 varchar2(100),
	data5 date,
	data6 date
)
```
```sql
insert into proc_debug values(null,null,null,null,null,null)
```

```sql
create or replace procedure TEST1
(
    code     IN   varchar2,
    name1    OUT  varchar2,
    name2    OUT  varchar2
)
AS
    CURSOR cur1 IS
        SELECT 氏名,フリガナ FROM 社員マスタ
        WHERE 社員コード = code;

    syain_rec cur1%ROWTYPE;

BEGIN
    OPEN cur1;
        FETCH cur1 INTO syain_rec;
    CLOSE cur1;

    name1   := syain_rec.氏名;
    name2   := syain_rec.フリガナ;

END;
```
```sql
DECLARE
    x varchar2(100);
    y varchar2(100);
BEGIN
    test1('0001', x, y );
    update PROC_DEBUG set DATA3 = x, DATA4 = y;
END;
```

```sql
CREATE OR REPLACE FUNCTION GET_CNAME
(
    /* 文字列引数の定義 */
    PM_STRING IN VARCHAR2
)
/* 戻り値の定義 */
RETURN VARCHAR2

/**********************************************************/
/* 変数の定義 */
/**********************************************************/
AS
    RET_VALUE	VARCHAR2(2000);
    WK_VALUE	VARCHAR2(2000) := '初期値の設定';

/**********************************************************/
/* 処理開始 */
/**********************************************************/
BEGIN

    /* 代入 */
    RET_VALUE := PM_STRING;

    IF RET_VALUE is NULL THEN 
        RET_VALUE := '該当者は存在しません';
    ELSE 
        SELECT 氏名 INTO WK_VALUE from 社員マスタ
            WHERE 社員コード = RET_VALUE;
        RET_VALUE := WK_VALUE;
    END IF; 

    /* 戻り値 */
    RETURN RET_VALUE;

END;
```
```sql
select 社員コード,GET_CNAME(社員コード) as 氏名 from 社員マスタ
```

http://everything-you-do-is-practice.blogspot.com/2017/11/oracle-out.html


### GIMP のダイアログ内の値の初期設定

![image](https://user-images.githubusercontent.com/1501327/176601988-03e9933a-83f9-4bd1-9b48-96d2ff613657.png)

![image](https://user-images.githubusercontent.com/1501327/176845804-cd4a764a-726c-466e-9e67-2bd47040a056.png)

