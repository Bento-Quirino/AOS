import { createClient } from '@supabase/supabase-js'
const supabaseUrl = 'https://ptahqcfmlbirndukjood.supabase.co'
const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0YWhxY2ZtbGJpcm5kdWtqb29kIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MDM3NzM2NjIsImV4cCI6MjAxOTM0OTY2Mn0.S1EpSt-RMJXeXs6ucggXf7-3Oit_ItK0aNepAAF3r60'
export default createClient(supabaseUrl, supabaseKey)