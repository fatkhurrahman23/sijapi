import pandas as pd
# from sqlalchemy import create_engine
import sqlalchemy

try: 
    # Step 1: Load the Excel file into a pandas DataFrame
    df = pd.read_excel('data-mahasiswa.xlsx', engine='openpyxl')

    # Step 2: Set 'nim' as the index of the DataFrame
    # df.set_index('nim', inplace=True)

    # Step 3: Create a connection to the MySQL database
    engine = sqlalchemy.create_engine('mysql+pymysql://root:@localhost/penjadwalan_genetik_web')

    # Step 4: Define the data types for the MySQL table
    data_types = {
        'no': sqlalchemy.types.VARCHAR(length=4),
        'nama': sqlalchemy.types.VARCHAR(length=100),
        'nim': sqlalchemy.types.VARCHAR(length=12),
        'jk': sqlalchemy.types.Enum('L', 'P'),
        'kelas': sqlalchemy.types.VARCHAR(length=6)
    }

    # Step 5: Write the DataFrame to the MySQL table
    df.to_sql('data_mhs', con=engine, if_exists='replace', dtype=data_types)

    print("Conversion successful!")
except Exception as e:
    print("An error occurred:", e)