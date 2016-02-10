# read measures data from the data folder and generate the database table.
import sqlite3
import pandas
import glob
import os
from natsort import natsorted

conn = sqlite3.connect('public/copewell.db')
c = conn.cursor()
c.execute('DROP TABLE IF EXISTS measure')

data = pandas.read_csv('county_48ALHI.csv', index_col=0)

for file in natsorted(glob.glob('data/*.csv')):
    id = 'm' + os.path.splitext(os.path.basename(file))[0]
    df = pandas.read_csv(file, index_col=0)
    df.columns = [id]
    data = data.join(df, how='left')

data.to_sql('measure', conn)

conn.close()
